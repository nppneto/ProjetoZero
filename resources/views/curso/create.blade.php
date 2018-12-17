@extends('layouts.admin')

@section('title', 'Cursos')

@section('content')

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Cadastrar</h3>
                </div>
                <div class="box-body">
                    <form role="form" id="frmCadastro">
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
                                    <option disabled selected value="">Escolha o período...</option>
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
                                <textarea class="form-control" name="txtDestaque" id="inputTxtDestaque" cols="30" rows="5" minlength="72" maxlength="144"></textarea>
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
    window.document.querySelector('#frmCadastro').addEventListener('submit', function(e) { classCurso.save(e); });
</script>
@endsection