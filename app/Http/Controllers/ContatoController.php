<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $response = array(
            'nome' => $request->nome,
            'email' => $request->email,
            'assunto' => $request->assunto,
            'comentario' => $request->comentario
        );
        return response()->json($request); 
    }
}
