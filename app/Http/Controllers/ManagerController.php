<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index() {

        return view('admin.manager');
    }

    public function getCursos() {

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
                                    ativo,
                                    valor,
                                    destaque,
                                    disponivel,
                                    txt_destaque
                            FROM
                                curso");
        
        return view('admin.cursos', ['cursos' => $cursos]);
    }
}
