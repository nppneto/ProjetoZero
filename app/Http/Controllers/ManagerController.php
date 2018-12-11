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

    public function edit($id) {

        $query = DB::select("SELECT
                                    titulo,
                                    endereco,
                                    dt_inicio,
                                    dt_fim,
                                    horario_inicio,
                                    horario_fim,
                                    periodo,
                                    descricao,
                                    ativo,
                                    valor,
                                    destaque,
                                    disponivel,
                                    txt_destaque
                            FROM
                                    curso
                            WHERE
                                    id = :id", [':id' => $id]);
        
        return view('admin.editar', ['curso' => $query]);
    }

    public function update(Resquest $request, $id) {

        $response = array(
            'titulo' => $request->titulo,
            'endereco' => $request->endereco,
            'dt_inicio' => $request->dt_inicio,
            'dt_fim' => $request->dt_fim,
            'horario_inicio' => $request->horario_inicio,
            'horario_fim' => $request->horario_fim,
            'periodo' => $request->periodo,
            'descricao' => $request->descricao,
            'ativo' => $request->ativo,
            'valor' => $request->valor,
            'destaque' => $request->destaque,
            'disponivel' => $request->disponivel,
            'txt_destaque' => $request->txt_destaque
        );

        $query = DB::update("UPDATE 
                                    curso
                                SET 
                                    titulo = :titulo, 
                                    endereco = :endereco, 
                                    dt_inicio = :dt_inicio, 
                                    dt_fim = :dt_fim, 
                                    horario_inicio = :horario_inicio, 
                                    horario_fim = :horario_fim, 
                                    periodo = :periodo, 
                                    descricao = :descricao, 
                                    ativo = :ativo, 
                                    valor = :valor, 
                                    destaque = :destaque, 
                                    disponivel = :disponivel, 
                                    txt_destaque = :txt_destaque
                            WHERE 
                                id = :id", 
                                [
                                    ':id' => $id,
                                    ':titulo' => $response->titulo,
                                    ':endereco' => $response->endereco,
                                    ':dt_inicio' => $response->dt_inicio,
                                    ':dt_fim' => $response->dt_fim,
                                    ':horario_inicio' => $response->horario_inicio,
                                    ':horario_fim' => $response->horario_fim,
                                    ':periodo' => $response->periodo,
                                    ':descricao' => $response->descricao,
                                    ':ativo' => $response->ativo,
                                    ':valor' => $response->valor,
                                    ':destaque' => $response->destaque,
                                    ':disponivel' => $response->disponivel,
                                    ':txt_destaque' => $response->txt_destaque
                                ]);
            
        return view('admin.cursos');
    }
}
