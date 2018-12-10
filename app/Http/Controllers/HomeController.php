<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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

        $cursosDestaque = DB::select('SELECT id, titulo, txt_destaque FROM curso WHERE destaque = 1 LIMIT 3');

    return view('home', ['cursos' => $cursos, 'destaques' => $cursosDestaque ]);
    }
}
