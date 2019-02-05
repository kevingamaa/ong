<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <link rel="stylesheet" media="all" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,600,400italic,700' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('landing/css/page/animate.css') }}">

    <!-- Flexslider -->
    <link rel="stylesheet" href="{{ asset('landing/css/page/flexslider.css') }}">

    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('landing/css/page/icomoon.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('landing/css/page/magnific-popup.css') }}">

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('landing/css/page/bootstrap.css') }}">   
    
    <link rel="stylesheet" href="{{ asset('landing/css/page/style.css') }}">

    {{-- main style --}}
    <link rel="stylesheet" href="{{ asset('landing/css/main.css') }}">

    <title>
        @hasSection ('title')
            @yield('title')
        @endif
    </title>
</head>

<body>
    <!-- Loader -->
    <div class="fh5co-loader"></div>
    
        <div id="fh5co-page">
            @component('landing.component.navbar_component') 
            @endcomponent
            <main class="py-4">
                @yield('content')
            </main>

            <form target="pagseguro" action="https://pagseguro.uol.com.br/checkout/doacao.jhtml" method="post" style="display: none"
                class="pagseguro-form">
                <input type="hidden" name="email_cobranca" value="financeiro@casadacriancasantoamaro.org.br">
                <input type="hidden" name="moeda" value="BRL">
                <input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/doacoes/120x53-doar.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!">
            </form>
            
            <footer id="fh5co-footer">
                <div class="container">
                    <div class="row row-bottom-padded-md">
                        <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
                            <div class="fh5co-footer-widget">
                                <h3>Empresa</h3>
                                <ul class="fh5co-links">
                                    <li><a href="sobre.php">Sobre nós</a></li>
                                    <li><a href="projetos.php">projetos</a></li>
                                    <li><a href="doacoes.php">Doações</a></li>
            
                                </ul>
                            </div>
                        </div>
            
                        <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
                            <div class="fh5co-footer-widget">
                                <h3>Registros Institucionais:</h3>
                                <ul class="fh5co-links">
                                    <li><a href="#"> Utilidade Pública Federal Portaria nº1026 de 09/01/01 Publ. DOE 12/11/01</a></li>
                                    <li><a href="#">Utilidade Pública Federal Portaria n44.732 de 29/02/00 Publ. DOE 01/03/00</a></li>
                                </ul>
                            </div>
                        </div>
            
                        <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
                            <div class="fh5co-footer-widget">
                                <h3>Fale conosco</h3>
                                <p>
                                    <a href="mailto:casadacriancacca@hotmail.com">casadacriancacca@hotmail.com</a> <br> Santo Amaro Grossarl
                                    Rua Padre Chico, 320 <br> Santo Amaro - São Paulo - SP / Cep: 04747-090 <br>
            
                                    <a href="tel:+551156863288">Tel. 55 11 5686.3288 / 3624.2660</a>
                                    <a href="tel:+551156863288">Fax. 55 11 5686.3288</a>
            
                                </p>
                            </div>
                        </div>
            
                        <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
                            <div class="fh5co-footer-widget">
                                <h3>Follow Us</h3>
                                <ul class="fh5co-social">
                                    <li><a href="http://twitter.com/casadacriancasa"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="http://www.flickr.com/photos/casadacrianca/"><i class="fab fa-flickr"></i></a></li>
                                    <li><a href="http://www.linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div><iframe width="210" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-br&amp;q=R.+Padre+Chico,+320+-+Santo+Amaro,+S%C3%A3o+Paulo,+04747-090&amp;sll=-14.179186,-50.449219&amp;sspn=91.125623,186.152344&amp;ie=UTF8&amp;cd=1&amp;geocode=FcEGl_4d53Y3_Q&amp;split=0&amp;hq=&amp;hnear=R.+Padre+Chico,+320+-+Santo+Amaro,+S%C3%A3o+Paulo,+04747-090&amp;ll=-23.656789,-46.696701&amp;spn=0.015724,0.023174&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe></div>
                        </div>
            
                    </div>
            
                </div>
                <div class="fh5co-copyright animate-box">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="fh5co-left">
                                    <small>&copy; 2018 <a href="index.php"><img src="{{ asset('landing/img/logo.png') }}"></a> </small>
                                </p>
                                <p class="fh5co-right">
                                    <small class="fh5co-right">
            							Desenvolvido por: 
            							<a href="#" target="_blank">PROGRAMM JUNGS &#10084; </a>, &nbsp;
            						</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    
</body>
    <!-- jQuery -->
    <script src="{{ asset('landing/js/page/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('landing/js/page/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('landing/js/page/bootstrap.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('landing/js/page/jquery.waypoints.min.js') }}"></script>
    <!-- Flexslider -->
    <script src="{{ asset('landing/js/page/jquery.flexslider-min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('landing/js/page/jquery.magnific-popup.min.js') }}"></script>
    
    <script src="{{ asset('landing/js/page/magnific-popup-options.js') }}"></script>
    
    {{-- <script type="text/javascript" src="js/jgallery.min.js"></script> --}}
    
    
    <script src="{{ asset('landing/js/page/main.js') }}"></script>

    
    <script src="{{ asset('landing/js/page/jquery.cookie.js') }}"></script>
    <script type="text/javascript">
        $('.btn-doar').click(() => {
            $('.pagseguro-form').submit()
        })
    </script>
    @hasSection ('js')
        @yield('js')
    @endif
</html>