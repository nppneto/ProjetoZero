<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Detalhes extends Controller
{
    public function getCursoById($id) {

        $cursoById = DB::select('SELECT
                                        titulo,
                                        endereco,
                                        dt_inicio,
                                        dt_fim,
                                        horario_inicio,
                                        horario_fim,
                                        periodo,
                                        descricao,
                                        valor
                                FROM
                                    curso
                                WHERE id = :id', [':id' => $id]);
        

        return view('detalhes', ['curso' => $cursoById]);
    }

//Fim do Controller
}
