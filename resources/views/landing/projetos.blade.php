@extends('layouts.landing') 
@section('title', 'Projetos')
@section('content')
    <section id="fh5co-hero" class="js-fullheight" style='background-image: url("{{ asset('landing/img/backgrounds/bg-parceiros.jpg') }}");' data-next="yes">
        <div class="fh5co-overlay"></div>
        <div class="container">
            <div class="fh5co-intro js-fullheight">
                <div class="fh5co-intro-text">
                    <div class="fh5co-left-position">
                        <h2 class="animate-box">Projetos e Eventos</h2>
                        <small>Seja voluntario para ajudar a ong em eventos</small>
                        <p class="animate-box">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfW9O2r4_HIi9jDSXm7-riJy0ldfu0vYdu8SK7gChhQcmMa4A/viewform" class="btn btn-primary"
                                target="__blank">
								Se-voluntariar
								
							</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="fh5co-learn-more animate-box">
            <a href="#" class="scroll-btn">
				<span class="text">Saiba mais</span>
				<span class="arrow"><i class="fas fa-caret-down"></i></span>
			</a>
        </div>
    </section>
    
    <section id="fh5co-projects">
        <div class="container">
            <div class="row row-bottom-padded-md">
                <div class="col-md-12 text-center">
                    <h2 class="fh5co-lead animate-box">Nossa pagina no facebook</h2>
                    <p class="fh5co-sub-lead animate-box">
                        Focamos para dar o melhor para as crianças, verifique nossos projetos e eventos no facebook
                    </p>
                </div>
            </div>

          

            <div class="row text-center">
                <div class="col-md-3 clearfix"></div>
                <div class="col-md-6 animate-box">
                    <div class="fb-page" data-href="https://www.facebook.com/CasaDaCriancaEDoAdolecenteSantoAmaroGrossarl/" data-tabs="timeline"
                        data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/CasaDaCriancaEDoAdolecenteSantoAmaroGrossarl/" class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/CasaDaCriancaEDoAdolecenteSantoAmaroGrossarl/">Casa da Criança e do Adolescente Santo Amaro</a>
                        </blockquote>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    <!-- END #fh5co-hero -->
    
    <div id="fh5co-faqs">
        <div class="container">
            <div class="row row-bottom-padded-lg">
                <div class="col-md-6 col-md-offset-3 text-center">
    
                    <h2 class="fh5co-lead animate-box">Nossos Projetos</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <ul class="fh5co-faq-list">
                        
                        @foreach ($projetos as $projeto)
                            <li class="animate-box">
                                <h2>{{ $projeto->title }}</h2>
                                <p>
                                    @php
                                        echo $projeto->description
                                    @endphp
                                </p>
                            </li>
                        @endforeach
                        
                    </ul>
                    {{ $projetos->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        (function(d, s, id) { 
            var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s);
            js.id = id; 
            js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2'; 
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
@endsection