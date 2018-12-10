<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index() {

        $cursos = DB::select("SELECT
                                    id,
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
                                            id,
                                            titulo,
                                            txt_destaque
                                        FROM
                                            curso
                                        WHERE destaque = 1
                                        LIMIT 3');

        return view('home', [
            'cursos' => $cursos,
            'destaques' => $cursosDestaque
        ]);
    }

//Fim do Controller
}
