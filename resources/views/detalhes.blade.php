@extends('layouts.app')

@section('title', 'Curso')

@section('content')

    <div class="container">
        @if($cursos)
            @foreach ($cursos as $curso)
                <h2>{{ $curso->titulo }}</h2>
                <br/>
                <p>{{ $curso->endereco }}</p>
                <p>{{ $curso->endereco }}</p>
                <p>{{ $curso->endereco }}</p>
                <p>{{ $curso->endereco }}</p>
            @endforeach
        @else
            <h2>Não há objeto</h2>
        @endif
    </div>
    
@endsection