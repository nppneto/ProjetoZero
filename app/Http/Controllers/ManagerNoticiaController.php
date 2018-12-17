<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ManagerNoticiaController extends Controller
{
    public function index() {

        $query = "SELECT
                        id, 
                        titulo, 
                        mensagem, 
                        DATE_FORMAT(updated_at, '%d/%m/%Y - %H:%i') AS updated_at 
                    FROM 
                        noticia";

        $noticia = DB::select($query);

        return view('noticia.index', ['noticias' => $noticia]);

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
}
