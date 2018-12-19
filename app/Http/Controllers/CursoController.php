<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() {
        $query = "SELECT
                        id,
                        titulo,
                        endereco,
                        dt_inicio,
                        dt_fim,
                        horario_inicio,
                        horario_fim,
                        periodo,
                        descricao,
                        txt_destaque,
                        valor 
                  FROM 
                        curso 
                  WHERE ativo = 1";

        $cursos = DB::select($query);

        return view('site.cursos', [ 'cursos' => $cursos ]);
    }

    public function show($id) {
        $query = "SELECT
                        id,
                        titulo,
                        endereco,
                        DATE_FORMAT(dt_inicio, '%d/%m/%y') AS dt_inicio,
                        DATE_FORMAT(dt_fim, '%d/%m/%y') AS dt_fim,
                        TIME_FORMAT(horario_inicio, '%H:%i') AS horario_inicio,
                        TIME_FORMAT(horario_fim, '%H:%i') AS horario_fim,
                        periodo,
                        objetivo,
                        metodologia,
                        requisito,
                        descricao,
                        valor
                  FROM
                        curso
                  WHERE id = :id";

        $curso = DB::select($query, [':id' => $id]);

        return view('site.detalhes', ['curso' => $curso]);
    }
}
