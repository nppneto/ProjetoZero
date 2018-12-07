@extends('layouts.app')
@section('title', 'Gestor - Administração Empresarial e Consultoria Condominial')
@section('content')

<div class="faixa-sup">
    <div class="img_blank">
        <img src="images/gestor_blank.png" alt="">
    </div>
    <div class="tw"></div>
</div>

<section class="faixa-inf">
    <div class="mensagem">
        <div class="container-fluid">
            <p class="microsoft marquee"><span>Segundo delegado, homem disse que queria expulsar o animal, mas não teve a intenção de matar. Depoimento aconteceu na tarde desta quinta-feira</span></p>
    </div>
</section>

<main class="container">
    <section class="page_home">
        <section class="cursos_destaque">
            <header>
                    <h3>Cursos em Destaque</h3>
            </header>
            <div class="row">
                @foreach ($destaques as $destaque)
                    <article class="col-md-4" >
                        <div class="card mb-4 shadow-md">
                            {{-- <img class="card-img-top"> --}}
                            <div class="card-body">
                                <p class="card-text">{{ $destaque->titulo }}</p>
                                <p class="card-content-body">{{ $destaque->txt_destaque }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a  class="btn btn-sm" href="cursos/{{ $destaque->id }}">Saiba mais</a>
                                    </div>
                                    {{-- <small class="text-muted">Em alta</small> --}}
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>

        <section class="row">
            <div class="depoimentos">
                    <div id="carouselContent" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active text-center p-4">
                                     <p>lorem ipsum (imagine longer text)</p>
                                </div>
                                <div class="carousel-item text-center p-4">
                                    
                                    <p>lorem ipsum (imagine longer text)</p>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
            </div>
        </section>

        <div class="row">
            <div class="container">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div> 
        </div>

    </section>
</main>
    

    {{-- <div class="album py-5 bg-light">
        <div class="container">
                <div class="row">
                @foreach ($cursosDestaque as $destaque)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                                alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="images/imagem2.jpg"
                                data-holder-rendered="true">
                            <div class="card-body">
                                <p class="card-text">{{ $destaque->titulo }}</p>
                                <p class="card-text">{{ $destaque->descricao }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary"><a href="cursos/{{ $destaque->id_curso }}">Detalhes</a></button>
                                    </div>
                                    <small class="text-muted">Em alta</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- <div class="col-md-4">
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
                                <small class="text-muted">EM ALTA</small>
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
                </div> -->

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
                            @foreach ($cursos as $curso)
                                <tr>
                                    <td>{{ $curso->titulo }}</td>
                                    <td>{{ $curso->endereco }}</td>
                                    <td>{{ $curso->dt_inicio}}</td>
                                    <td>{{ $curso->dt_fim}}</td>
                                    <td>R$ {{ $curso->valor }}</td>   
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> --}}
@endsection