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
                        <input type="hidden" name="" id="hiddenId" data-id="{{ $noticias[0]->id }}">
                        <input type="hidden" name="_method" value="PUT">
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
                            <a href="/manager/noticia" type="button" class="btn btn-primary">
                                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            </a>
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-floppy-o" aria-hidden="true"></i>
                            </button>
                        </div>
                    </form>
                    <div class="overlay">
                        <i class="fa fa-refresh fa-spin"></i>
                    </div>
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