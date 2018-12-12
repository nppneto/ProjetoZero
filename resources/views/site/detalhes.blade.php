@extends('layouts.app')

@section('title', 'Curso - ' .$curso[0]->titulo)    

@section('content')

    <div id="cursoDetalhes" class="container">
        <h2>{{ $curso[0]->titulo }}</h2>
        <br/>
        <p>Descrição do Curso: {{ $curso[0]->descricao }}</p>
        <p>Endereço: {{ $curso[0]->endereco }}</p>
        <p>Datas: {{ $curso[0]->dt_inicio }} à {{ $curso[0]->dt_fim }}</p>
        <p>Horários: {{ $curso[0]->horario_inicio }} às {{ $curso[0]->horario_fim }}hs</p>
        <p>Período: {{ $curso[0]->periodo }}</p>

        <a class="btn btn-primary" href="/contato/{{ $curso[0]->id }}">Solicitar Orçamento</a>
        <a class="btn btn-primary" href="/">Voltar</a>
    </div>
    
@endsection