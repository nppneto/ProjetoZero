<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="/images/gestor.ico">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" >
</head>

<body>
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
                        <a class="dropdown-item" href="/cursos">Cursos Profissionalizantes</a>
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

    <footer class="footer">
        <div class="container bottom_border">
            <div class="row">
            <div class=" col-sm-4 col-md col-sm-4  col-12 col">
            <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
            <!--headin5_amrc-->
            <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
            <p><i class="fa fa-phone"></i>  +91-9999878398  </p>
            <p><i class="fa fa fa-envelope"></i> info@example.com  </p>
            
            
            </div>
            
            
            <div class=" col-sm-4 col-md  col-6 col">
            <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
            <!--headin5_amrc-->
            <ul class="footer_ul_amrc">
            <li><a href="http://kalarikendramdelhi.com">Image Rectoucing</a></li>
            <li><a href="http://kalarikendramdelhi.com">Clipping Path</a></li>
            <li><a href="http://kalarikendramdelhi.com">Hollow Man Montage</a></li>
            <li><a href="http://kalarikendramdelhi.com">Ebay & Amazon</a></li>
            <li><a href="http://kalarikendramdelhi.com">Hair Masking/Clipping</a></li>
            <li><a href="http://kalarikendramdelhi.com">Image Cropping</a></li>
            </ul>
            <!--footer_ul_amrc ends here-->
            </div>
            
            
            <div class=" col-sm-4 col-md  col-6 col">
            <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
            <!--headin5_amrc-->
            <ul class="footer_ul_amrc">
            <li><a href="http://kalarikendramdelhi.com">Remove Background</a></li>
            <li><a href="http://kalarikendramdelhi.com">Shadows & Mirror Reflection</a></li>
            <li><a href="http://kalarikendramdelhi.com">Logo Design</a></li>
            <li><a href="http://kalarikendramdelhi.com">Vectorization</a></li>
            <li><a href="http://kalarikendramdelhi.com">Hair Masking/Clipping</a></li>
            <li><a href="http://kalarikendramdelhi.com">Image Cropping</a></li>
            </ul>
            <!--footer_ul_amrc ends here-->
            </div>
            
            
            <div class=" col-sm-4 col-md  col-12 col">
            <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
            <!--headin5_amrc ends here-->
            
            <ul class="footer_ul2_amrc">
            <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
            <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
            <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
            </ul>
            <!--footer_ul2_amrc ends here-->
            </div>
            </div>
            </div>
            
            
            <div class="container">
            <ul class="foote_bottom_ul_amrc">
            <li><a href="http://kalarikendramdelhi.com">Home</a></li>
            <li><a href="http://kalarikendramdelhi.com">About</a></li>
            <li><a href="http://kalarikendramdelhi.com">Services</a></li>
            <li><a href="http://kalarikendramdelhi.com">Pricing</a></li>
            <li><a href="http://kalarikendramdelhi.com">Blog</a></li>
            <li><a href="http://kalarikendramdelhi.com">Contact</a></li>
            </ul>
            <!--foote_bottom_ul_amrc ends here-->
            <p class="text-center">Copyright @2017 | Designed With by <a href="#">Your Company Name</a></p>
            
            <ul class="social_footer_ul">
            <li><a href="http://kalarikendramdelhi.com"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="http://kalarikendramdelhi.com"><i class="fab fa-twitter"></i></a></li>
            <li><a href="http://kalarikendramdelhi.com"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="http://kalarikendramdelhi.com"><i class="fab fa-instagram"></i></a></li>
            </ul>
            <!--social_footer_ul ends here-->
        </div>
    </footer>
{{-- 
    <div class="section-footer">
        <div class="container">
            <div class="footer-b1">
                <img src="" alt="">
                <small>Copyright © 2017 Gestor</small>
            </div>

            <div class="footer-b2">
                <div class="fmapa-b1">
                    <h3><a href="">Compre nossos curso</a></h3>
                    <ul>
                        <li><a href="Sobre">Sobre o negócio</a></li>
                        <li><a href="">Link</a></li>
                        <li><a href="">Link</a></li>
                    </ul>
                </div>

                <div class="fmapa-b1">
                    <h3><a href="">Fale Conosco</a></h3>
                    <ul>
                        <li><a href="">Link</a></li>
                        <li><a href="">Link</a></li>
                    </ul>
                </div>

                <div class="fmapa-b1">
                    <h3><a href="">Trabalhe Conosco</a></h3>
                    <ul>
                        <li><a href="">Link</a></li>
                        <li><a href="">Link</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</div> --}}


<script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>