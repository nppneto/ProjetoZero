@extends('layouts.site')

@section('title', 'Curso - ' .$curso[0]->titulo)    

@section('content')
<div class="container">
    <section class="box_gestor">
        <header>
            <h3>Curso de {{ $curso[0]->titulo }}</h3>
        </header>
    </section>

    <div class="box_info">
        <ul style="padding-left:0px;">
            <li>
                <a class="" href="/cursos">Cursos</a>
            </li>
            <li>
                <a class="" href="/contato/{{ $curso[0]->id }}">Solicitar Orçamento</a>
            </li>
            <li>
                <a href="/contatos">Indique um amigo</a>
            </li>
        </ul>
    </div>

    <aside class="pull-right">
        <div class="box_aside">
            <header class="text-center">
                Instrutor
            </header>
            <p>
                <ul>
                    <li><a href="">Formado em Ciências da Computação</a></li>
                    <li><a href="">Dezoito anos de experiência na área</a></li>
                    <li><a href="">MBA Comercio exterior</a></li>
                    <li><a href="">link</a></li>
                    <li><a href="">link</a></li>
                </ul>
            </p>
        </div>
        <div class="box_aside">
            <header class="text-center">
                Compartilhe com seu amigo
            </header>
            <p>
                <ul>
                    <li><a href="">Twitter</a></li>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Instagram</a></li>
                    <li><a href="">Linkedin</a></li>
                </ul>
            </p>
        </div>
    </aside>
</div>
    <div id="cursoDetalhes" class="container">
        <section class="content_curso">
            <h4>
                <b>Objetivo</b>
            </h4>
            <p class="text-left">{{ $curso[0]->descricao }}</p>
        </section>

        <section class="content_curso">
            <h4>
                <b>Pré - requisitos</b>
            </h4>
            <p class="text-left">{{ $curso[0]->descricao }}</p>
        </section> 
        
        <section class="content_curso">
            <h4>
                <b>Metodologia</b>
            </h4>
            <p class="text-left">{{ $curso[0]->descricao }}</p>
        </section>

        <section class="content_curso">
            <h4>
                <b>Conteúdo do curso: </b>
            </h4>
            <p class="text-left">{{ $curso[0]->descricao }}</p>
        </section>

        <section class="content_curso">
            <p>Endereço: {{ $curso[0]->endereco }}<br />
               Datas: {{ $curso[0]->dt_inicio }} à {{ $curso[0]->dt_fim }}<br />
               Horários: {{ $curso[0]->horario_inicio }} às {{ $curso[0]->horario_fim }}hs<br />
               Período: {{ $curso[0]->periodo }}
            </p>
        </section>
        <a class="btn btn-primary" href="/cursos">
            <i class="fa fa-chevron-left" aria-hidden="true"></i> Pagina Anterior
        </a>
    </div>
    
@endsection