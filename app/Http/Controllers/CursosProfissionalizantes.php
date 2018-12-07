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

        return view('cursos', [
            'cursos' => $cursos
        ]);
    }

    public function getCursoById($id) {

        $cursoById = DB::select("SELECT
                                        titulo,
                                        endereco,
                                        DATE_FORMAT(dt_inicio, '%d/%m/%y') AS dt_inicio,
                                        DATE_FORMAT(dt_fim, '%d/%m/%y') AS dt_fim,
                                        TIME_FORMAT(horario_inicio, '%H:%i') AS horario_inicio,
                                        TIME_FORMAT(horario_fim, '%H:%i') AS horario_fim,
                                        periodo,
                                        descricao,
                                        valor
                                    FROM
                                        curso
                                    WHERE id = :id", [':id' => $id]);
            

        return view('detalhes', ['cursos' => $cursoById]);
    }

//Fim do Controller
}
