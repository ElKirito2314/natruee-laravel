<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\ContatoMail;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function contato() {
        return view('site.contato', ['titulo' => 'Página de Contato']);
    }

    public function salvar(Request $request){
        $regras = [
            'nome' => 'required',
            'telefone' => 'required|min:13|max:13',
            'email' => 'required|email',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:1500'
        ];

        $feedback = [
            'nome.required' => 'Preencha o seu :attribute, por favor!',
            'telefone.required' => 'O preenchimento do seu :attribute é obrigatório!',
            'email.required' => 'Preencha seu e-mail, por favor!',
            'email' => 'Insira um e-mail válido!',
            'motivo_contato.required' => 'Por favor, selecione o motivo do seu contato!',
            'telefone.min' => 'O :attribute deve ser preenchido deste modo EX: (11)987654321',
            'telefone.max' => 'O :attribute deve ser preenchido deste modo EX: (11)987654321',
            'mensagem.required' => 'Por favor, digite aqui a sua :attribute',
            'mensagem.max' => 'Este campo tem limite de 1500 caracteres'
        ];

        $request->validate($regras, $feedback);

        $detalhes = [
            'nome' => $request->nome,
            'email' => $request->email,
            'mensagem' => $request->mensagem,
            'motivo_contato' => $request->motivo_contato
        ];
                Mail::to('wellington.nunes2314@gmail.com')->send(new ContatoMail($detalhes));
            
            return redirect()->route('site.index');
    }
}
