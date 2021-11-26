<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContatenosMailable;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function index()
    {
        return view('contato.index');
    }

    //função para enviar emails
    public function store(Request $request)
    {

        $request->validate([
            'nome'=>'required',
            'email'=>'required|email',
            'mensagem' => 'required'
        ]);

        $email = new ContatenosMailable($request->all());

        Mail::to('luiz8907@hotmail.com')->send($email);

        return redirect()->route('contato.index')->with('info', 'Mensagem enviada!');
    }
}
