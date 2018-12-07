@extends('layouts.app')

@section('title', 'Curso')

@section('content')

    <div id="cursoDetalhes" class="container">
        @if($cursos)
            @foreach ($cursos as $curso)
                <h2>{{ $curso->titulo }}</h2>
                <br/>
                <p>Endereço: {{ $curso->endereco }}</p>
                <p>Datas: {{ $curso->dt_inicio }} - {{ $curso->dt_fim }}</p>
                <p>Horário de Aula: {{ $curso->horario_inicio }} às {{ $curso->horario_fim }}hs</p>
                <p>Período: {{ $curso->periodo }}</p>
                <p>Nesse curso vou aprender: {{ $curso->descricao }}</p>
                <p>Preço: R$ {{ $curso->valor }}</p>
            @endforeach
        @else
            <h2>Não há objeto</h2>
        @endif
    </div>
    
@endsection