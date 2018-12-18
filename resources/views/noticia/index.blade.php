@extends('layouts.admin')

@section('title', 'Notícias')

@section('content')

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Notícias</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                    </div>

                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Título</th>
                                    <th>Mensagem</th>
                                    <th>Atualizado em</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>{{ $noticias[0]->titulo }}</td>
                                <td>{{ $noticias[0]->mensagem }}</td>
                                <td>{{ $noticias[0]->updated_at }}</td>
                                <td>
                                    <a href="noticia/{{ $noticias[0]->id }}/edit" type="button" class="btn btn-primary">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tbody>
                        </table>
                    </div>
                    {{-- <div class="box-footer clearfix">
                        <div class="pull-right">
                            <a href="/manager/curso/create" class="btn bg-olive margin">Atualizar</a>
                        </div>
                    </div>    --}}
                </div>
            </div>   
        </div>
    </div>
</section>
    
@endsection