@extends('layouts.admin')

@section('title', 'Cursos')

@section('content')

<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Formulário</h3>
                </div>
                <div class="box-body">
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile">
            
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Check me out
                                </label>
                            </div>
                        </div>            
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">Cursos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                        <th scope="col">Curso</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Dt-Início</th>
                        <th scope="col">Dt-Fim</th>
                        <th scope="col">H-Início</th>
                        <th scope="col">H-Fim</th>
                        <th scope="col">Período</th>
                        {{-- <th scope="col">Descrição</th> --}}
                        <th scope="col">Ativo</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Destaque</th>
                        <th scope="col">Disponível</th>
                        {{-- <th scope="col">Texto de Destaque</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cursos as $curso)
                        <tr>
                            <th><a href="cursos/{{ $curso->id }}">{{ $curso->titulo }}</a></th>
                            <td>{{ $curso->endereco }}</td>
                            <td>{{ $curso->dt_inicio }}</td>
                            <td>{{ $curso->dt_fim }}</td>
                            <td>{{ $curso->horario_inicio }}</td>
                            <td>{{ $curso->horario_fim }}</td>
                            <td>{{ $curso->periodo }}</td>
                            <td>{{ $curso->ativo }}</td>
                            <td>{{ $curso->valor }}</td>
                            <td>{{ $curso->destaque }}</td>
                            <td>{{ $curso->disponivel }}</td>
                            {{-- <td>{{ $curso->txt_destaque }}</td> --}}
                        </tr>
                    @endforeach
                </table>
            </div>           
        </div>
    </div>
</section>
    
@endsection