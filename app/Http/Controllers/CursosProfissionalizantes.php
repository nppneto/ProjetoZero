<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CursosProfissionalizantes extends Controller
{
    public function index() {

        $cursos = DB::select('SELECT 
                                    id,
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
                                WHERE ativo = 1');

        return view('cursos_profissionalizantes', [
            'cursos' => $cursos
        ]);
    }

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
