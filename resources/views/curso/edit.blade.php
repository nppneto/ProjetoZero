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
                    <form id="frmEditCurso" role="form">
                        <input type="hidden" name="" id="hiddenId" data-id="{{ $curso[0]->id }}">
                        <input type="hidden" name="_method" value="PUT">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="titulo">Título:</label>
                                <input type="text" class="form-control" id="inputTitulo" value="{{ $curso[0]->titulo }}" placeholder="Entre com o título...">
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereço:</label>
                                <input type="text" class="form-control" id="inputEndereco" value="{{ $curso[0]->endereco }}" placeholder="Entre com o endereço...">
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
                                <label for="descricao">Objetivo:</label>
                                <textarea class="form-control" name="descricao" id="inputObjetivo" cols="30" rows="10">{{ $curso[0]->objetivo }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="descricao">Pré-Requisitos:</label>
                                <textarea class="form-control" name="descricao" id="inputRequisitos" cols="30" rows="10">{{ $curso[0]->requisito }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="descricao">Metodologia:</label>
                                <textarea class="form-control" name="descricao" id="inputMetodologia" cols="30" rows="10">{{ $curso[0]->metodologia }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="descricao">Conteúdo do Curso:</label>
                                <textarea class="form-control" name="descricao" id="inputDescricao" cols="30" rows="10">{{ $curso[0]->descricao }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="preco">Preço:</label>
                                <input class="form-control" id="inputValor" type="number" pattern="^\d+(\.|\,)\d{2}$" value="{{ $curso[0]->valor }}">
                            </div>
                            <div class="form-group">
                                <label for="txtDestaque">Texto Destaque:</label>
                                <textarea class="form-control" name="txtDestaque" id="inputTxtDestaque" cols="30" rows="5" minlength="72" maxlength="144">{{ $curso[0]->txt_destaque }}</textarea>
                            </div>
                            <div class="form-group">                                
                                <label for="destaque">Destaque:</label>
                                <input type="checkbox" id="chkDestaque" {{ ($curso[0]->destaque === 1) ? 'checked' : '' }}>

                                <label for="disponivel">Disponível:</label>
                                <input type="checkbox" id="chkDisponivel" {{ ($curso[0]->disponivel === 1) ? 'checked' : '' }}>
                            </div>
                        </div>            
                        <div class="box-footer">
                            <a href="/manager/curso" type="button" class="btn btn-primary">
                                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            </a> <!-- Ou href="{{ route('curso.index') }}" -->
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-floppy-o" aria-hidden="true"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="overlay">
                    <i class="fa fa-refresh fa-spin"></i>
                </div>

            </div>
        </div>
    </div>
</section>    
@endsection
@section('script')
<script>
    var classCurso = new ClassCurso(document.querySelector('meta[name="csrf-token"]').attributes.content.value);
    window.document.querySelector('#frmEditCurso').addEventListener('submit', function(e) { classCurso.up(e); });
</script>
@endsection