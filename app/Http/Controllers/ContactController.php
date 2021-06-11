<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function __construct()
    {

    }



    public function index()
    {
        

        return view('site.fale-conosco.index');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required',
            'g-recaptcha-response' => 'required',
            'message' => 'required'
        ]);
        
        if ($validator->fails()) {
            return redirect('/contato#form')
                ->withInput()
                ->withErrors($validator);
        }

        $mail = $request->all();

        Mail::send('site.fale-conosco.index', 
            [
                'row' => $mail,
                'subject' => config('app.name', 'CROPER') . " | Contato Site - #" . $mail['name']
            ],
            function ($m) use ($mail) {
                $m->from(" promaxiclinicaodontologica@hotmail.com", 
                    config('app.name', 'CROPER') . " | Contato Site - #" . $mail['name']
                );
                $m->to(' lauren@taskka.com.br')->cc('lauren@taskka.com.br')
                    ->subject("Contato formulário do site - " . config('app.name', 'Promaxi'));
        });

        return redirect('/contato#form')->with('success', 'Seu e-mail foi enviado com sucesso!');

    }
}

