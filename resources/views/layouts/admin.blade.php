<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="{{ mix("css/admin.css") }}" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" type="image/x-icon" href="/images/gestor.ico">
        <meta name="csrf-token" content="{{ csrf_token() }}" /> 
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">
            <div class="logo">
                <img src="/images/gestor.png" width="30" height="30" alt="">
                <a href="/manager" style="color: #fff;">GESTOR RH</a>
            </div>
            
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <p>
                                        {{ Auth::user()->name }} - {{ Auth::user()->email }}
                                        <small>Desde: {{ Auth::user()->created_at->format('d/m/Y') }}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-danger btn-flat">Sair</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left info">
                        <p></p>
                        <a href="#">
                            <i class="fa fa-circle text-success"></i> Online
                        </a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    <li><a href="/manager/curso"><span>Cursos</span></a></li>
                    <li><a href="/manager/noticia"><span>Notícias</span></a></li>
                </ul><!-- /.sidebar-menu -->
            </section>
        </aside>

        <div class="content-wrapper">
            <section class="content-header">
                 <h1>
                    Painel Administrativo
                </h1>
            </section>

            <section class="content">

                @yield('content')

            </section>
        </div>
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                Developer
            </div>
            <strong>Copyright © {{ now()->year }} <i>Gestor LTDA</i>.</strong> Todos os direitos reservados.
        </footer>

    </div>
    <script src="{{ mix ("js/admin.js") }}" type="text/javascript"></script>
    @yield('script')
    </body>
</html>