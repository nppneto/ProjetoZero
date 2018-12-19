<html>
    <head>

    </head>
    <body>
        <h2>Boa tarde, Gestor!</h2>

        <h4>Solicitação de Orçamento</h4>
        
        <p>Nome do contato: {{ $contato->getNome() }}<br/>
            E-mail: {{ $contato->getEmail() }}<br/>
            Assunto: {{ $contato->getAssunto() }}<br/>
            Mensagem: {{ $contato->getMensagem() }}</p>

    </body>
    <footer>
        <br/>
        <p>Mensagem gerada automaticamente. Não responda este e-mail.</p>
    </footer>
</html>