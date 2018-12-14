@extends('layouts.app')
@section('title', 'Gestor - Administração Empresarial e Consultoria Condominial')
@section('content')

<div class="faixa-sup">
    <div class="img_blank">
        <img src="images/gestor_blank.png" alt="">
        <div class="tw"></div>
    </div>
</div>

<section class="faixa-inf">
    <div class="mensagem">
        <div class="container-fluid">
            <p class="microsoft marquee">
                <span>Segundo delegado, homem disse que queria expulsar o animal, mas não teve a intenção de matar. Depoimento aconteceu na tarde desta quinta-feira</span>
            </p>
    </div>
</section>

<main class="container">
    <section class="page_home">
        <section class="cursos_destaque">
            <header>
                <h3>Cursos em destaque</h3>
            </header>
            <div class="row">
                @foreach ($destaques as $destaque)
                    <article class="col-md-4" >
                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white">
                                {{ $destaque->titulo }}
                            </div>
                            <div class="card-body">
                                <p class="card-content-body">{{ $destaque->txt_destaque }}</p>
                                <a  class="btn btn-primary btn-sm" href="curso/{{ $destaque->id }}">Saiba mais</a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>

        {{-- <section class="row">
            <section class="depoimentos">
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
            </section>
        </section> --}}

        <section class="row">
            <section class="container">
                <div class="info_cursos_abertos">
                    <header>
                        <h3>Próximos cursos</h3>
                    </header>
                    <table class="table table-hover table-bordered table-sm" style="text-align: center;">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th scope="col">Curso</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Datas</th>
                                <th scope="col">Horário</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cursos as $curso)
                                <tr>
                                    <th><a href="curso/{{ $curso->id }}">{{ $curso->titulo }}</a></th>
                                    <td>{{ $curso->endereco }}</td>
                                    <td>{{ $curso->dt_inicio }} à {{ $curso->dt_fim }}</td>
                                    <td>{{ $curso->horario_inicio }} às {{ $curso->horario_fim }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section> 
        </section>

    </section>
</main>
@endsection