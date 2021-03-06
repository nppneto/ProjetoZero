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
            ':txt_destaque' => $request->txt_destaque,
            ':objetivo' => $request->objetivo,
            ':metodologia' => $request->metodologia,
            ':requisito' => $request->requisitos
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
                                txt_destaque,
                                objetivo,
                                metodologia,
                                requisito)
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
                            :txt_destaque,
                            :objetivo,
                            :metodologia,
                            :requisito)";
        
        DB::insert($query, $response);
    }

    public function show($id)
    {

    }

    public function edit($id)
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
                        valor,
                        destaque,
                        disponivel,
                        txt_destaque,
                        objetivo,
                        metodologia,
                        requisito
                  FROM
                        curso
                  WHERE
                        id = :id";

        $curso = DB::select($query, [':id' => $id]);
        return view('curso.edit', ['curso' => $curso]);
    }

    public function update(Request $request, $id)
    {
        $response = array(
            ':id' => $id,
            ':titulo' =>  $request->titulo,
            ':endereco' => $request->endereco,
            ':dt_inicio' => $request->dt_inicio,
            ':dt_fim' => $request->dt_fim,
            ':horario_inicio' => $request->horario_inicio,
            ':horario_fim' => $request->horario_fim,
            ':periodo' => $request->periodo,
            ':descricao' => $request->descricao,
            ':valor' => $request->valor,
            ':destaque' => $request->destaque,
            ':disponivel' => $request->disponivel,
            ':txt_destaque' => $request->txt_destaque,
            ':objetivo' => $request->objetivo,
            ':metodologia' => $request->metodologia,
            ':requisitos' => $request->requisitos
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
                        valor = :valor, 
                        destaque = :destaque, 
                        disponivel = :disponivel, 
                        txt_destaque = :txt_destaque,
                        objetivo = :objetivo,
                        metodologia = :metodologia,
                        requisito = :requisitos
                 WHERE 
                    id = :id";

        DB::update($query, $response);
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
