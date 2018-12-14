<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="/images/gestor.ico">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    <header class="header_page">
        <div class="box_info_contato pull-right">
            <ul>
                <li>
                    <h5>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Santos (SP)</h5>
                    <div class="body_box_info">
                        <p>
                            <b>Logradouro:</b>
                            Av: Arnaldo de Carvalho, nº 92, Sala nº 22
                        </p>
                    </div>
                </li>
                <li>
                    <h5>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        (13) 2102 - 3483
                    </h5>
                    <div class="body_box_info">
                        <p>
                            <b>Email:</b>
                            gestor.lcs@gmail.com
                        </p>
                    </div>
                </li>
                <li>
                    <h5>
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        Seg - Sex 8:00 - 18:00
                    </h5>
                    <div class="body_box_info">
                        <p>
                            <b>Fechado:</b> Finais de semana e feriados</p>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/">
            <img src="/images/gestor.png" width="30" height="30" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Página Inicial</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="/gestor">A Empresa</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="/servicos" >Nossos Serviços</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Educação
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/cursos">Cursos Profissionalizantes</a>
                        <a class="dropdown-item" href="/palestras">Palestras</a>
                    </div>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" role="button" href="galeria">Galeria de Fotos</a>
                </li> --}}
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer class="footer">
        <div class="container bottom_border">
            <div class="row">
                <div class=" col-sm-4 col-md  col-6 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">
                        <a href="/gestor"> A Empresa</a>
                    </h5>
                    <ul class="footer_ul_amrc">
                        <li><a href="/gestor#historia">História</a></li>
                        <li><a href="/gestor#missao">Missão</a></li>
                        <li><a href="/gestor#executivo">Corpo Executivo</a></li>
                        <li><a href="/gestor#premiacao">Premiação</a></li>
                        <li><a href="/gestor#mensagens">Mensagens</a></li>
                    </ul>
                </div>

                <div class=" col-sm-4 col-md  col-6 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">
                        <a href="/servicos" style="color:#fff;">Nossos Serviços</a>
                    </h5>
                    <ul class="footer_ul_amrc">
                        <li><a href="/servicos#administracao">Administração</a></li>
                        <li><a href="/servicos#consultoria">Consultoria</a></li>
                        <li><a href="/servicos#assessoria">Assessoria</a></li>
                    </ul>
                </div>

                <div class=" col-sm-4 col-md  col-6 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">
                        <a href="" style="color:#fff;">Educação</a>
                    </h5>
                    <ul class="footer_ul_amrc">
                        <li><a href="/cursos">Cursos Profissionalizantes</a></li>
                        <li><a href="/palestras">Palestras</a></li>
                    </ul>
                </div>

                <div class=" col-sm-4 col-md  col-12 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
                    <ul class="footer_ul2_amrc">
                        <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
                        <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
                        <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
                    </ul>
                </div>

            </div><!-- / row -->
        </div><!-- /content -->
        <div class="container">
            <p class="text-center">Copyright {{ now()->year }} | Gestor Rh</p>
        </div>
        
    </footer>
<script src="{{ mix('/js/app.js') }}"></script>
@yield('script')
</body>

</html>