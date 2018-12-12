<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ManagerCursoController extends Controller
{
    public function index()
    {
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
                        ativo,
                        destaque,
                        disponivel,
                        valor 
                  FROM 
                        curso 
                  WHERE ativo = 1";

        $cursos = DB::select($query);
        return view('curso.index', [ 'cursos' => $cursos ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $query = "SELECT
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
                        id = :id";

        $curso = DB::select($query, [':id' => $id]);
        return view('curso.edit', ['curso' => $curso]);
    }

    public function update(Request $request)
    {
        $response = array(
            ':id' => $request->$id,
            ':titulo' => $request->titulo,
            ':endereco' => $request->endereco,
            ':dt_inicio' => $request->dt_inicio,
            ':dt_fim' => $request->dt_fim,
            ':horario_inicio' => $request->horario_inicio,
            ':horario_fim' => $request->horario_fim,
            ':periodo' => $request->periodo,
            ':descricao' => $request->descricao,
            ':ativo' => $request->ativo,
            ':valor' => $request->valor,
            ':destaque' => $request->destaque,
            ':disponivel' => $request->disponivel,
            ':txt_destaque' => $request->txt_destaque
        );

        $query = "UPDATE 
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
                    id = :id";

        DB::update($query, $response);
    }

    public function destroy($id)
    {
        //
    }
}
