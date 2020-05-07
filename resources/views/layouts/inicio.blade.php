<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Sona Template">
        <meta name="keywords" content="Sona, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sistema Integrado de Serviços - SisNorte</title>
    
        <!-- Google Font -->
        <link href="{{asset('https://fonts.googleapis.com/css?family=Lora:400,700&display=swap')}}" rel="stylesheet">
        <link href="{{asset('https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap')}}" rel="stylesheet">
    
        <!-- Css Styles -->

        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/flaticon.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/nice-select.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    
</head>

    
    <body>

            <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon  search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
            <div class="language-option">
                <img src="{{asset('img/flag.jpg')}}" alt="">
                <span>EN <i class="fa fa-angle-down"></i></span>
                <div class="flag-dropdown">
                    <ul>
                        <li><a href="#">Zi</a></li>
                        <li><a href="#">Fr</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" class="bk-btn">Painel Administrativo</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="{{route('index')}}">Início</a></li>

                <li><a href="{{route('solicito.index')}}">Pedidos</a>
                <ul class="dropdown">
                        <li><a href="{{route('solicito.index')}}">Ver todos</a></li>
                    </ul>
                </li>
            <li><a href="{{route('user.index')}}">Clientes</a>
            <ul class="dropdown">
                       <li><a href="{{route('user.create')}}">Novo</a></li>
                       <li><a href="{{route('user.index')}}">Ver todos</a></li>
                    </ul>
            </li>
                <li><a href="{{route('funcionario.index')}}">Funcionarios</a>
                <ul class="dropdown">
                       <li><a href="{{route('funcionario.create')}}">Novo</a></li>
                       <li><a href="{{route('funcionario.index')}}">Ver todos</a></li>
                    </ul>
                </li>

                <li><a href="{{route('service.index')}}">Serviço</a>
                    <ul class="dropdown">
                           <li><a href="{{route('service.create')}}">Novo</a></li>
                           <li><a href="{{route('service.index')}}">Ver todos</a></li>
                        </ul>
                    </li>

                <li><a href="{{route('empresa.index')}}">Empresa</a>
                    <ul class="dropdown">
                <li><a href="{{route('empresa.create')}}">Novo</a></li>
                <li><a href="{{route('empresa.index')}}">Ver todos</a></li>
                    </ul>
                </li>

            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> (096) XXXX XXXX</li>
            <li><i class="fa fa-envelope"></i> exemplo@gmail.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3">
                        <div class="tn-right">

                        <a href="{{ route('admin.dashboard') }}" 
                        class="bk-btn">{{-- Auth::user()->name --}}</a>

                      <!--  <ul class="tn-left">
                            <li><i class="fa fa-envelope"></i> exemplo@gmail.com</li>
                        </ul> -->
                    </div>
                    </div>


                    <div class="col-lg-9">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        <a href="{{ route('admin.dashboard') }}" class="bk-btn">Painel Administrativo</a>
                            <div class="language-option">
                                <img src="{{asset('img/flag.jpg')}}" alt="">
                                <span>sair<!--<i class="fa fa-angle-down"></i>--></span>
                                <div  class="flag-dropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('sair') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" 
                                    method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <!--<ul>
                                        <li><a href="#">Zi</a></li>
                                        <li><a href="#">Fr</a></li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="{{route('index')}}">
                                <img src="{{asset('img/logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="{{route('index')}}">Início</a></li>

                                    <li><a href="{{route('solicito.index')}}">Pedidos</a>
                                    <ul class="dropdown">
                                            <li><a href="{{route('solicito.index')}}">Ver todos</a></li>
                                        </ul>
                                    </li>
                                <li><a href="{{route('user.index')}}">Clientes</a>
                                <ul class="dropdown">
                                           <li><a href="{{route('user.create')}}">Novo</a></li>
                                           <li><a href="{{route('user.index')}}">Ver todos</a></li>
                                        </ul>
                                </li>
                                    <li><a href="{{route('funcionario.index')}}">Funcionarios</a>
                                    <ul class="dropdown">
                                           <li><a href="{{route('funcionario.create')}}">Novo</a></li>
                                           <li><a href="{{route('funcionario.index')}}">Ver todos</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="{{route('service.index')}}">Serviço</a>
                                        <ul class="dropdown">
                                               <li><a href="{{route('service.create')}}">Novo</a></li>
                                               <li><a href="{{route('service.index')}}">Ver todos</a></li>
                                            </ul>
                                        </li>

                                    <li><a href="{{route('empresa.index')}}">Empresa</a>
                                        <ul class="dropdown">
                                    <li><a href="{{route('empresa.create')}}">Novo</a></li>
                                    <li><a href="{{route('empresa.index')}}">Ver todos</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </nav>

                            

                            <div class="nav-right search-switch">
                                
                              <!--  <i class="icon_search"></i> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="col-xl-3 col-lg-0 offset-xl-1 offset-lg-1">
        @include('flash::message')
    </div>
        @yield('inicio') 
        


        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('js/jquery-ui.min.js')}}"></script>
        <script src="{{asset('js/jquery.slicknav.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        
     </body>
</html>