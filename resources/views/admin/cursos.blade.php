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
                                <label for="titulo">Título:</label>
                                <input type="text" class="form-control" id="inputTitulo" placeholder="Entre com o título...">
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereço:</label>
                                <input type="text" class="form-control" id="inputEndereço" placeholder="Entre com o endereço...">
                            </div>
                            <div class="form-group">
                                <label for="dataInicio">Data Inicial:</label>
                                <input type="date" class="form-control" id="inputDtInicio">
                            </div>
                            <div class="form-group">
                                <label for="dataFim">Data Final:</label>
                                <input type="date" class="form-control" id="inputDtFim">
                            </div>
                            <div class="form-group">
                                <label for="horaInicio">Horário Inicial:</label>
                                <input type="time" class="form-control" id="inputHoraInicio">
                            </div>
                            <div class="form-group">
                                <label for="horaFim">Horário Final:</label>
                                <input type="time" class="form-control" id="inputHoraFim">
                            </div>
                            <div class="form-group">
                                <label for="periodo">Período</label>
                                <select class="form-control" name="periodo" id="inputPeriodo">
                                    <option value="MANHÃ">MANHÃ</option>
                                    <option value="NOITE">NOITE</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="descricao">Descrição:</label>
                                <textarea class="form-control" name="descricao" id="inputDescricao" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="preco">Preço:</label>
                                <input class="form-control" id="inputValor" type="number" pattern="^\d+(\.|\,)\d{2}$">
                            </div>
                            <div class="form-group">
                                <label for="txtDestaque">Texto Destaque:</label>
                                <textarea class="form-control" name="txtDestaque" id="inputTxtDestaque" cols="30" rows="5"></textarea>
                            </div>
                        </div>            
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
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
                            <th><a href="cursos/{{ $curso->id }}/edit">{{ $curso->titulo }}</a></th>
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