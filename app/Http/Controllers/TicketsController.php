<?php
namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Ticket;
use App\Reply;
use Validator;
use function Couchbase\defaultDecoder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use TCG\Voyager\Models\Role;

class TicketsController extends Controller

    /***
     * ControlleurTickets  sert a gérer les Tickets crée par les utilisateurs
     * l'ajout d'un ticket,
     * modfication de l'état
     * Affectation a un technicien
     * annuler un ticket
     */


{


    public function index()
    {
        //---- méthode permet d'afficher les différents tickets selon l'utilisaeur  authentifié

        /***
         * Si la role de l'utlisateur est égale à 1 => Admin
         * Si la role de l'utlisateur est égale à 2 => Client
         * Si la role de l'utlisateur est égale à 3 => Technicien
         * elle retourne auusi le nombre total des tickets crée dans le variable $count
         */

        $authUser = Auth::id();
        $query = User::Where('id',"=",$authUser)->get('role_id');

//        $query = DB::table('user_roles')->where('user_id', $authUser)->get('role_id');

        //------- if authentificated user is client

            $result = json_decode($query, true);

            //------ Get the role of Authentificaed user

            $userRole = ($result[0]["role_id"]);

            if ($userRole == 1){
			
                $tickets = Ticket::orderBy('created_at', 'desc')->get();

				$count = $tickets->count();
			}
            elseif ($userRole == 3){

                $tickets = Ticket::where('id_technicien', "=", $authUser)->orderBy('created_at', 'DESC')->get();
                $count = $tickets->count();

            }


            elseif ($userRole == 2) {
			
                $tickets = Ticket::where('id_client', "=", $authUser)->orderBy('created_at', 'DESC')->get();
								$count= $tickets->count();

			}








        return view('vendor.voyager.tickets.browse')->with('tickets',$tickets)->with('count',$count);


        //----------- if authentificated user is a technican


    }

    public function create()
    {
        /***
         * Méthode qui affiche la formulaire d'ajout un ticket
         */
        return view('vendor.voyager.tickets.create');
    }

    public function store(Request $request)
    {


        $request->validate([
            'titre_ticket' => 'required',
            'service' => 'required',
            'details' => 'required',
            'file_pathURL' => 'mimes:jpeg,bmp,png,pdf,doc,docx,ppt,pptx,zip|max:640000',
        ]);

        $ticketData = $request->except('_token');
        $Ticket = new Ticket();
        $Ticket->titre_ticket = $ticketData['titre_ticket'];
        $Ticket->service = $ticketData['service'];
        $date = new \DateTime(null);
        $Ticket->slug_ticket = "EXIT-".$date->format('dmYis');
        $Ticket->details = $ticketData['details'];
        $Ticket->id_client = Auth::user()->id;
        $hasfile= 0;
        if ($request->file('file_pathURL') != '') {
            $hasfile= 1;
        }
        if ($hasfile == 1) {
            $fileName = time().'_'.$request->file('file_pathURL')->getClientOriginalName();
            $request->file('file_pathURL')->store(('').$fileName);
            $request->file('file_pathURL')->move(public_path('/uploads/tickets/'),$fileName );
            $Ticket->attachment_file = '/uploads/tickets/'.$fileName;

        }
        //------ Dealing with uploaded file

//            $file->file_pathURL;
        $Ticket->save();
        return redirect()->route('tickets')->with('success','Ticket Envoyée avec success');
    }

    public function show($id)
    {

        $replies = Reply::where('ticket_id',"=",$id)->orderBy('created_at', 'DESC')->get();
        $ticket = Ticket::findOrFail($id);
        $technicienNom = User::Where('id',"=",$ticket->id_technicien)->pluck('name');
//        @dd($technicienNom);
        return view('vendor.voyager.tickets.detailsticket',compact('ticket'))->with('technicienNom',$technicienNom)->with('replies',$replies);
    }




    public function destroy($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();
        return redirect()->route('tickets')->with('success', 'Ticket supprimé avec success');
    }
    public function marquerresolu($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->etat = "résolu";
        $ticket->save();
        return redirect()->route('tickets')->with('success','Ticket marqué comme résolu');
    }

    public function notresolve($id)
    {
        /***
        Méthode notresolve Sert a changer l'état d'un ticket
         **/
        $ticket = Ticket::findOrFail($id);
        $ticket->etat = "non résolu";
        $ticket->save();
        return redirect()->route('tickets')->with('success','Ticket marqué comme non résolu');
    }


    public function affeecterTicket (Request $request,$id) {
        /***
         Méthode affeecterTicket Sert a affecter un Ticket a un technicien
         **/
        $ticket = Ticket::FindOrFail($id);
        $techniciens = User::where('role_id',"=",'3')->get();
        $ticketData = $request->except('_token');
        if($request->isMethod('post')) {
            //------ data validation
            $ticketData = $request->except('_token');
            $ticket->id_technicien = $ticketData['id_technicien'];
            $ticket->save();

            return redirect()->route('tickets')->with('success','Technicien  affecté avec success');
        }
        return view('vendor.voyager.tickets.affectationTicket',compact('ticket'))->with('techniciens',$techniciens);
    }
}



