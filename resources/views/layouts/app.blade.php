<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="images/gestor.ico">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/">
            <img src="images/gestor.png" width="30" height="30" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Página Inicial <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Gestor
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="historia">Nossa História</a>
                        <a class="dropdown-item" href="missao">Missão</a>
                        <a class="dropdown-item" href="executivo">Corpo Executivo</a>
                        <a class="dropdown-item" href="premiacao">Premiação</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="mensagens">Mensagens</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Nossos Serviços
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="administracao">Administração</a>
                        <a class="dropdown-item" href="consultoria">Consultoria</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="assessoria">Assessoria</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Educação
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="cursos">Cursos Profissionalizantes</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="palestras">Palestras</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="button" href="galeria">Galeria de Fotos</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer>
        <ul>
            <li>Compre Nossos Cursos</li>
            <li>Fale Conosco</li>
            <li>Trabalhe Conosco</li>
        </ul>
    </footer>


<script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>