@extends('layouts.app')

@section('title', 'Curso - ' .$cursos[0]->titulo)    

@section('content')

    <div id="cursoDetalhes" class="container">
        @foreach ($cursos as $curso)
            <h2>{{ $curso->titulo }}</h2>
            <br/>
            <p>Descrição do Curso: {{ $curso->descricao }}</p>
            <p>Endereço: {{ $curso->endereco }}</p>
            <p>Datas: {{ $curso->dt_inicio }} - {{ $curso->dt_fim }}</p>
            <p>Horário de Aula: {{ $curso->horario_inicio }} às {{ $curso->horario_fim }}hs</p>
            <p>Período: {{ $curso->periodo }}</p>

            <a class="btn btn-primary" href="/contato/{{ $curso->id }}">Solicitar Orçamento</a>
        @endforeach
    </div>
    
@endsection