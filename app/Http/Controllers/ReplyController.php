<?php

namespace App\Http\Controllers;

use App\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{


    /**
     * Display a listing of the resource.
     *Controlleur sert a gérer les commentaires des tickets
     * 1- ajouter d'un commentaire
     * 2- affichage de liste des commentaire concernant un ticket spécifique
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        // Méthode qui recoit l'object Response et $id de ticket concerné est enregistre le commentaire
        /***
         * $repleyData = l'object recu depuis la variable $request 
         *  
         * 
         * 
         */


        if($request->isMethod('post')) {
            
            //** le code sera exécuté en cas de méthode post */
            $request->validate([
                'reply_body' => 'required',
            ]);

            $replyData = $request->except('_token');
            $reply = new Reply();
            $reply->reply_body = $replyData['reply_body'];
            $reply->ticket_id = $id;
            $reply->author_id = Auth::user()->id;
            $reply->save();
            return redirect('clientarea/tickets/show/'.$id)->with('success','Commentaire ajouté');


        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reply  $repley
     * @return \Illuminate\Http\Response
     */
    public function show(Reply $repley)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reply  $repley
     * @return \Illuminate\Http\Response
     */
    public function edit(Reply $repley)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reply  $repley
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reply $repley)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reply  $repley
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reply $repley)
    {
        //
    }
}
