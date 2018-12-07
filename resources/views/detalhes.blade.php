@extends('layouts.app')

@section('title', 'Curso')

@section('content')

    <div class="container">
        <h2>{{ $curso->titulo }}</h2>
    </div>
    
@endsection