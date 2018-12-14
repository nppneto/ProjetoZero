@extends('layouts.app')

@section('title', 'Cursos Disponíveis')

@section('content')
<div class="container">
    <section class="box_gestor">
        <header>
            <h3 id="historia">Principais cursos</h3>
        </header>
                
        <div class="row">
            @foreach ($cursos as $curso)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <p class="card-text"><strong>{{ $curso->titulo }}</strong></p>
                            <p class="card-text text-muted">{{ $curso->txt_destaque }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm bg-info"><a href="curso/{{ $curso->id }}">Detalhes</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
    
@endsection