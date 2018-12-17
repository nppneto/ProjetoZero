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
                    <form id="frmEditNoticia" role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="titulo">Título:</label>
                                <input type="text" class="form-control" id="inputTitulo" value="{{ $noticias[0]->titulo }}" placeholder="Entre com o título...">
                            </div>
                            <div class="form-group">
                                <label for="endereco">Mensagem:</label>
                                <input type="text" class="form-control" id="inputMensagem" value="{{ $noticias[0]->mensagem }}" placeholder="Entre com a mensagem...">
                            </div>           
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                            <a href="/manager/noticia" type="button" class="btn btn-primary">Voltar</a> <!-- Ou href="{{ route('noticia.index') }}" -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
    
@endsection
@section('script')
<script>
    var classNoticia = new ClassNoticia(document.querySelector('meta[name="csrf-token"]').attributes.content.value);
    window.document.querySelector('#frmEditNoticia').addEventListener('submit', function(e) { classNoticia.up(e); });
</script>
@endsection