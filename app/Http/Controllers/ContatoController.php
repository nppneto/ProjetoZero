<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function getDataFormContato(Request $request) {
        $response = array(
            'nome' => $request->nome,
            'email' => $request->email,
            'assunto' => $request->assunto,
            'comentario' => $request->comentario
        );
        return response()->json($request); 
    }
}
