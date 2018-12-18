<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\SendMailContato;
use App\Contato;

class ContatoController extends Controller
{
    public function index() {
        return view('site.contato');
    }

    public function getOrcamento($id) {
        $query = "SELECT id, titulo FROM curso WHERE id = :id";
        
        $assunto = DB::select($query, [':id' => $id]);
        return view('site.contato', ['assuntos' => $assunto]);
    }

    public function sendEmail(Request $request) {
        $contato = new Contato();

        $contato->setNome($request->nome);
        $contato->setEmail($request->email);
        $contato->setAssunto($request->assunto);
        $contato->setMensagem($request->mensagem);

        Mail::to($request->email)->send(new SendMailContato($contato));
    }
}
