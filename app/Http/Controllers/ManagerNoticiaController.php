<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ManagerNoticiaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {

        $query = "SELECT
                        id, 
                        titulo, 
                        mensagem, 
                        DATE_FORMAT(updated_at, '%d/%m/%Y - %H:%i') AS updated_at 
                    FROM 
                        noticia";

        $noticias = DB::select($query);

        return view('noticia.index', ['noticias' => $noticias]);

    }

    public function edit($id) {

        $query = "SELECT
                        id,
                        titulo,
                        mensagem
                    FROM
                        noticia
                    WHERE id = :id";
        
        $noticia = DB::select($query, [':id' => $id]);

        return view('noticia.edit', ['noticias' => $noticia]);
    }

    public function update(Request $request, $id) {

        $response = array(
            ':id' => $id,
            ':titulo' => $request->titulo,
            ':mensagem' => $request->mensagem
        );

        $query = "UPDATE 
                        noticia
                    SET 
                        titulo = :titulo, 
                        mensagem = :mensagem, 
                        updated_at = NOW()
                    WHERE 
                        id = :id";
        
        DB::update($query, $response);
    }
}
