@extends('layouts.admin')

@section('title', 'Editar')

@section('content')

<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar</h3>
                </div>
                <div class="box-body">
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="titulo">Título:</label>
                                <input type="text" class="form-control" id="inputTitulo" value="{{ $curso[0]->titulo }}" placeholder="Entre com o título...">
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereço:</label>
                                <input type="text" class="form-control" id="inputEndereço" value="{{ $curso[0]->endereco }}" placeholder="Entre com o endereço...">
                            </div>
                            <div class="form-group">
                                <label for="dataInicio">Data Inicial:</label>
                                <input type="date" class="form-control" id="inputDtInicio" value="{{ $curso[0]->dt_inicio }}">
                            </div>
                            <div class="form-group">
                                <label for="dataFim">Data Final:</label>
                                <input type="date" class="form-control" id="inputDtFim" value="{{ $curso[0]->dt_fim }}">
                            </div>
                            <div class="form-group">
                                <label for="horaInicio">Horário Inicial:</label>
                                <input type="time" class="form-control" id="inputHoraInicio" value="{{ $curso[0]->horario_inicio }}">
                            </div>
                            <div class="form-group">
                                <label for="horaFim">Horário Final:</label>
                                <input type="time" class="form-control" id="inputHoraFim" value="{{ $curso[0]->horario_fim }}">
                            </div>
                            <div class="form-group">
                                <label for="periodo">Período</label>
                                <select class="form-control" name="periodo" id="inputPeriodo">
                                    <option value="MANHÃ" {{ ($curso[0]->periodo === "MANHÃ") ? 'selected' : '' }}>MANHÃ</option>
                                    <option value="TARDE" {{ ($curso[0]->periodo === "TARDE") ? 'selected' : '' }}>TARDE</option>
                                    <option value="NOITE" {{ ($curso[0]->periodo === "NOITE") ? 'selected' : '' }}>NOITE</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="descricao">Descrição:</label>
                                <textarea class="form-control" name="descricao" id="inputDescricao" cols="30" rows="10">{{ $curso[0]->descricao }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="preco">Preço:</label>
                                <input class="form-control" id="inputValor" type="number" pattern="^\d+(\.|\,)\d{2}$" value="{{ $curso[0]->valor }}">
                            </div>
                            <div class="form-group">
                                <label for="txtDestaque">Texto Destaque:</label>
                                <textarea class="form-control" name="txtDestaque" id="inputTxtDestaque" cols="30" rows="5">{{ $curso[0]->txt_destaque }}</textarea>
                            </div>
                            <div class="form-group">                                
                                <label for="ativo">Ativo:</label>
                                <input type="checkbox" id="chkAtivo" {{ ($curso[0]->ativo === 1) ? 'checked' : '' }}>
                                <label for="destaque">Destaque:</label>
                                <input type="checkbox" id="chkDestaque" {{ ($curso[0]->destaque === 1) ? 'checked' : '' }}>
                                <label for="disponivel">Disponível:</label>
                                <input type="checkbox" id="chkDisponivel" {{ ($curso[0]->disponivel === 1) ? 'checked' : '' }}>
                            </div>
                        </div>            
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
    
@endsection