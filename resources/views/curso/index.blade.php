@extends('layouts.admin')

@section('title', 'Cursos')

@section('content')
{{-- Tabela de Cursos --}}
<section class="content">
    <div class="row">
        <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">Todos os Cursos</h3>
            <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Curso</th>
                        <th>Endereço</th>
                        <th>Dt-Início</th>
                        <th>Dt-Fim</th>
                        <th>H-Início</th>
                        <th>H-Fim</th>
                        <th>Período</th>
                        <th>Preço</th>
                        <th>Destaque</th>
                        <th>Disponível</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cursos as $curso)
                        <tr>
                            <td>{{ $curso->titulo }}</td>
                            <td>{{ $curso->endereco }}</td>
                            <td>{{ $curso->dt_inicio }}</td>
                            <td>{{ $curso->dt_fim }}</td>
                            <td>{{ $curso->horario_inicio }}</td>
                            <td>{{ $curso->horario_fim }}</td>
                            <td>{{ $curso->periodo }}</td>
                            <td>{{ $curso->valor }}</td>
                            <td>{{ ($curso->destaque === 1) ? 'Sim' : 'Não' }}</td>
                            <td>{{ ($curso->disponivel === 1) ? 'Sim' : 'Não' }}</td>
                            <td>
                                <a href="curso/{{ $curso->id }}/edit" type="button" class="btn btn-primary">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                                <a href="javascript:void(0);" data-id="{{ $curso->id }}" onclick="deletar(this)"  type="button" class="btn btn-danger">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="box-footer clearfix">
                <div class="pull-right">
                    <a href="/manager/curso/create" class="btn bg-olive margin">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </a>
                </div>
            </div>         
        </div>
    </div>
</section>
{{-- Tabela de Notícia --}}

@endsection
@section('script')
<script>
    var classCurso = new ClassCurso(document.querySelector('meta[name="csrf-token"]').attributes.content.value);
    function deletar(e) { classCurso.del(e); }
</script>
@endsection