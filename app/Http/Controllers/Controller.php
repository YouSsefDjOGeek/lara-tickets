<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;


class Controller extends BaseController
/**---- Controlleur destiné au partie Public

 * Servi les différents pages publices tel que : expertise, Service, Contact
 * Gérer l'envoi des mails
 * **/
{
    public function mail()
    {
        $data['title'] = "This is Test Mail Tuts Make";

        Mail::send('emails.email', $data, function($message) {

            $message->to('yousstrabelsi@gmail.com', 'Receiver Name')

                ->subject('Tuts Make Mail');
        });

        if (Mail::failures()) {
            return response()->Fail('Sorry! Please try again latter');
        }else{
            return response()->success('Great! Successfully send in your mail');
        }
    }



    public function index () {
        return view('public.home');
    }
    public function eshop () {
        $shopUrl = "192.168.1.13:8080";
        return redirect()->away($shopUrl);

    }
}
