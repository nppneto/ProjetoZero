@extends('layouts.app')

@section('title', 'Gestor - Administração Empresarial e Consultoria Condominial')

@section('content')

<div class="faixa-sup">
</div>

<section class="faixa-inf">
    <div class="container">
        <a href="">Saiba mais sobre os nossos curso:</a>
    </div>
</section>

<div class="container">

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="images/imagem2.jpg"
                            data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">"But I must explain to you how all this mistaken idea of denouncing
                                pleasure and praising pain
                                was born and I will give you a complete account of the system."
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Leia mais</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" src="images/imagem1.jpg" data-holder-rendered="true"
                            style="height: 225px; width: 100%; display: block;">
                        <div class="card-body">
                            <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Leia mais</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" src="images/imagem3.jpg" data-holder-rendered="true"
                            style="height: 225px; width: 100%; display: block;">
                        <div class="card-body">
                            <p class="card-text">"Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur."
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Leia mais</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th scope="col">Curso</th>
                                <th scope="col">Local</th>
                                <th scope="col">Data Início</th>
                                <th scope="col">Data Fim</th>
                                <th scope="col">Valor R$</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($cursos as $curso)
                                    <td>{{ $curso->titulo }}</td>
                                    <td>{{ $curso->endereco }}</td>
                                    <td>{{ $curso->dt_inicio}}</td>
                                    <td>{{ $curso->dt_fim}}</td>
                                    <td>R$ {{ $curso->valor }}</td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
@endsection