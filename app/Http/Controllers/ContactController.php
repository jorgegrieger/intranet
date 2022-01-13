<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\http\Requests\ContatoRequest;
use App\Contact;


class ContactController extends Controller
{
    public function contato()
    {
        return view('layout.contato');
    }

    public function ContactUsForm(ContatoRequest $request) {

        // Form validation

        //  Store data in database
        Contact::create($request->all());

        //  Send mail to admin
        \Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            if($request->email == NULL)
            {
            $message->from('faleconosco@bopaper.com.br');
            }else{ 
            $message->from($request->email);
        }
            $message->to('faleconosco@bopaper.com.br', 'Admin')->subject($request->get('subject'));
        });

        return back()->with('success', 'Nós recebemos sua mensagem e agradecemos por entrar em contato conosco!');
    }


}
