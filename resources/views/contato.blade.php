@extends('layouts.app')

@section('title', 'Contato')

@section('content')

    <h2>Contato</h2>

    <form class="container">
        <div class="form-group col-6">
            <label for="inputNome">Nome:</label>
            <input type="text" class="form-control" id="inputNome" placeholder="Nome...">
        </div>
        <div class="form-group col-6">
            <label for="inputEmail">E-mail</label>
            <input type="mail" class="form-control" id="inputEmail" placeholder="Digite seu e-mail...">
        </div>
        <div class="form-group col-6">
            <label for="inputAssunto">Assunto:</label>
            <input type="text" class="form-control" id="inputAssunto" placeholder="" value="Solicito informações referentes ao Curso: {{ $assuntos[0]->titulo }}">
        </div>
        <div class="form-group col-4">
            <label for="inputComentario">Informações Adicionais:</label>
            <div class="form-group">
                <textarea class="controls" name="inputComentario" id="inputComentario" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="form-group col-4">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <a class="btn btn-primary" href="/cursos/{{ $assuntos[0]->id }}">Voltar</a>
        </div>
    </form>
    
@endsection