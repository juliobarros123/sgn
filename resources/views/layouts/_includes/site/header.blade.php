
      

    <!doctype html>
<html class="no-js" lang="pt-pt">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="site/img/favicon.ico">
    <!-- 
    <link rel="stylesheet"
        href="site/css/A.+++++++++++,Mcc.pE1MsWz3TO.css.pagespeed.cf.sUVi8XqIg6.css" /> -->

    <link rel="stylesheet" href="site/css/bootstrap.min.css">
    <link rel="stylesheet" href="site/css/owl.carousel.min.css">
    <link rel="stylesheet" href="site/css/slicknav.css">
    <link rel="stylesheet" href="site/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="site/css/gijgo.css">
    <link rel="stylesheet" href="site/css/animate.min.css">
    <link rel="stylesheet" href="site/css/animated-headline.css">
    <link rel="stylesheet" href="site/css/magnific-popup.css">
    <link rel="stylesheet" href="site/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="site/css/themify-icons.css">
    <link rel="stylesheet" href="site/css/slick.css">
    <link rel="stylesheet" href="site/css/nice-select.css">

    <link rel="stylesheet" href="site/css/style.css">
</head>

<body>

    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">

                </div>
            </div>
        </div>
    </div>

    <header>

        <div class="header-area">
            <div class="main-header ">
                <div class="header-top d-none d-sm-block">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="d-flex justify-content-between flex-wrap align-items-center">
                                    <div class="header-info-left">
                                        <ul>
                                            <li><i class="fas fa-map-marker-alt"></i> 57/A, Green Lane, NYC</li>
                                            <li><i class="fas fa-phone-alt"></i> +10 (78) 367 3692</li>
                                        </ul>
                                    </div>
                                    <div class="header-info-right">
                                        <ul class="header-social">
                                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li> <a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">

                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">  <a href="index.html"><img src="site/img/logo/logo2_footer.png" alt=""></a></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">

                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ url('/classe') }}">Classes</a></li>
                                           
                                            <li><a href="{{ route('site.manuais-escolares') }}">Manuais Escolares</a></li>
                                           
                                            <li><a href="{{ route('site.sobre') }}">Sobre</a></li>
                                        
                                            @empty(Auth::user()->vc_tipoUtilizador)
                                                <li><a href="{{ route('login') }}">Entrar</a></li>
                                            @else
                                                <li><a href="{{ route('home.admin') }}"><b class="text-success">Painel</b></a></li>
                                            @endempty
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <main>