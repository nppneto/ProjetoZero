<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $query = "SELECT
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
                  WHERE ativo = 1";
                  
        $cursos = DB::select($query);

        $query = "SELECT id, titulo, txt_destaque FROM curso WHERE destaque = 1 LIMIT 3";

        $cursosDestaque = DB::select($query);
        return view('site.home', ['cursos' => $cursos, 'destaques' => $cursosDestaque ]);
    }
}
