<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Home extends Controller
{
    
    public function index() {

        $cursos = DB::select("SELECT 
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
                                WHERE ativo = 1");

        $cursosDestaque = DB::select('SELECT
                                            CD.id_curso AS id_curso,
                                            C.titulo AS titulo,
                                            C.descricao AS descricao
                                        FROM
                                            curso_destaque AS CD
                                        INNER JOIN curso AS C
                                        WHERE C.id = CD.id_curso
                                        LIMIT 3');

        return view('home', [
            'cursos' => $cursos,
            'cursosDestaque' => $cursosDestaque
        ]);
    }

//Fim do Controller
}
