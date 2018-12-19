@extends('layouts.site')

@section('title', 'Contato')

@section('content')
<section class="container">
    <section class="box_gestor">
            <header>
                <h3>Contatos</h3>
            </header>
    </section>
    <div class="row">
        <div class="col-md-6">
            <form id="formContato" class="form" method="POST" >
                <div class="form-group col-12">
                    <label for="inputNome">Nome:</label>
                    <input type="text" class="form-control" id="inputNome" placeholder="Nome...">
                </div>
                <div class="form-group col-12">
                    <label for="inputEmail">E-mail</label>
                    <input type="mail" class="form-control" id="inputEmail" placeholder="Digite seu e-mail...">
                </div>
                <div class="form-group col-12">
                    <label for="inputAssunto">Assunto:</label>
                    <input type="text" class="form-control" id="inputAssunto" placeholder="" value="Solicito informações referentes ao Curso: {{ $assuntos[0]->titulo }}">
                </div>
                <div class="form-group col-6">
                    <label for="inputComentario">Informações Adicionais:</label>
                    <div class="form-group">
                        <textarea class="controls" name="inputComentario" id="inputComentario" cols="63" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group col-4">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                    <a class="btn btn-primary" href="/curso/{{ $assuntos[0]->id }}">Voltar</a>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <aside>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3646.124581358861!2d-46.33738668491482!3d-23.95603438217053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce036d0ca9a335%3A0xfd52081f3f673912!2sCondom%C3%ADnio+Edif%C3%ADcio+Mariana+-+R.+Dr.+Arnaldo+de+Carvalho%2C+92+-+Campo+Grande%2C+Santos+-+SP%2C+11075-430!5e0!3m2!1spt-BR!2sbr!4v1545164980800" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                <div class="mensagem">
                    <h4>Gestor RH</h4>
                    <br />
                    <p>Desde já agradecemos o seu interesse em nossos cursos. Nossa meta é oferecer o melhor conteúdo para o aprendizado de nossos alunos.</p>
                    <p>Atenciosamente, <br />Diretoria Gestor RH</p>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection

@section('script')
<script src="{{ mix("js/contato.js") }}"></script>
@endsection
