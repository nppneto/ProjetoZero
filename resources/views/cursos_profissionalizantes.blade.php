@extends('layouts.app')

@section('title', 'Cursos Profissionalizantes')

@section('content')

<h2>Cursos</h2>

<div class="container">
        <div class="row">
            @foreach ($cursos as $curso)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        {{-- <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="images/imagem2.jpg"
                            data-holder-rendered="true"> --}}
                        <div class="card-body">
                            <p class="card-text">{{ $curso->titulo }}</p>
                            <p class="card-text">{{ $curso->descricao }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="cursos-profissionalizantes/detalhes/{{ $curso->id }}">Detalhes</a></button>
                                </div>
                                {{-- <small class="text-muted">Em alta</small> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</div>
    
@endsection