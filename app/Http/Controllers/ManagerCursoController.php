<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ManagerCursoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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
                        destaque,
                        disponivel,
                        valor 
                  FROM 
                        curso 
                  WHERE ativo = 1";

        $cursos = DB::select($query);

        return view('curso.index', ['cursos' => $cursos]);
    }

    // Não será usado
    public function create()
    {
        return view('curso.create');
    }

    public function store(Request $request)
    {
        $response = array(
            ':titulo' => $request->titulo,
            ':endereco' => $request->endereco,
            ':dt_inicio' => $request->dt_inicio,
            ':dt_fim' => $request->dt_fim,
            ':horario_inicio' => $request->horario_inicio,
            ':horario_fim' => $request->horario_fim,
            ':periodo' => $request->periodo,
            ':descricao' => $request->descricao,
            ':ativo' => 1,
            ':valor' => $request->valor,
            ':destaque' => 0,
            ':disponivel' => 0,
            ':txt_destaque' => $request->txt_destaque
        );

        $query = "INSERT INTO 
                            curso (
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
                                txt_destaque)
                    VALUES(
                            :titulo, 
                            :endereco, 
                            :dt_inicio, 
                            :dt_fim, 
                            :horario_inicio, 
                            :horario_fim, 
                            :periodo, 
                            :descricao, 
                            :ativo, 
                            :valor, 
                            :destaque, 
                            :disponivel, 
                            :txt_destaque)";
        
        DB::insert($query, $response);
        return view('curso.index');
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
        return redirect()->action('ManagerCursoController@index');
    }

    public function destroy($id)
    {
        $query = "UPDATE
                        curso 
                    SET
                        ativo = 0
                    WHERE
                        id = :id";

        DB::update($query, [':id' => $id]);
    }
}
