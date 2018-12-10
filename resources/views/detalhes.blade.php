@extends('layouts.app')

@section('title', 'Curso - ' .$cursos[0]->titulo)    

@section('content')

    <div id="cursoDetalhes" class="container">
        <h2>{{ $cursos[0]->titulo }}</h2>
        <br/>
        <p>Descrição do Curso: {{ $cursos[0]->descricao }}</p>
        <p>Endereço: {{ $cursos[0]->endereco }}</p>
        <p>Datas: {{ $cursos[0]->dt_inicio }} à {{ $cursos[0]->dt_fim }}</p>
        <p>Horários: {{ $cursos[0]->horario_inicio }} às {{ $cursos[0]->horario_fim }}hs</p>
        <p>Período: {{ $cursos[0]->periodo }}</p>

        <a class="btn btn-primary" href="/contato/{{ $cursos[0]->id }}">Solicitar Orçamento</a>
        <a class="btn btn-primary" href="/">Voltar</a>
    </div>
    
@endsection