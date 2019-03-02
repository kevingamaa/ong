@extends('layouts.landing')

@section('title', 'Home')
@section('content')
   <section id="fh5co-hero" class="js-fullheight" style='background-image: url("{{ asset('landing/img/backgrounds/bg-home.jpg') }}");' data-next="yes">
        <div class="fh5co-overlay"></div>
        <div class="container">
            <div class="fh5co-intro js-fullheight">
                <div class="fh5co-intro-text">

                    <div class="fh5co-left-position">
                        <h2 class="animate-box">Casa da criança</h2>
                        <small>Seja voluntario para ajudar a ong</small>
                        <p class="animate-box">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfW9O2r4_HIi9jDSXm7-riJy0ldfu0vYdu8SK7gChhQcmMa4A/viewform" class="btn btn-primary" target="__blank">
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
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h2 class="fh5co-lead animate-box">Nossos projetos</h2>
                    <p class="fh5co-sub-lead animate-box">
                        Focamos para dar o melhor para as crianças
                    </p>
                </div>
            </div>
            <div class="row">
                @foreach ($projetos as $projeto)
                <div class="col-md-4 col-sm-6 col-xs-12 animate-box">
                    <a href="{{ asset('storage/'.$projeto->photo) }}" class="fh5co-project-item image-popup">
                        <img src="{{ asset('storage/'.$projeto->photo) }}" alt="Image" style="object-fit: cover; width: 100%; height: 260px">
                        <div class="fh5co-text" style="max-height: 100%">
                            <h2>{{ $projeto->title }}</h2>
                            <p >
                                @php
                                    echo $projeto->description
                                @endphp
                            </p>
                            
                        </div>
                    </a>
                </div>
                @endforeach

                
            </div>
        </div>
    </section>
    

    
    
    <section id="sobre">
        <div class="container">
            <div class="col-md-6 col-md-push-6">
                <figure class="fh5co-feature-image animate-box">
                    <img src="{{ asset('landing/img/home/pulando-corda.jpg') }}" alt="" style="max-width: 600px; object-fit: cover">
                </figure>
            </div>
            <div class="col-md-6 col-md-pull-6">
                <span class="fh5co-label animate-box">ONG - Casa da criança</span>
                <h2 class="fh5co-lead animate-box">Conheça um pouco mais</h2>
                <div class="fh5co-feature">
    
                    <div class="fh5co-text animate-box">
                        <h3>Recreação e Atividades</h3>
                        <p>
                            Sala de Informática, Biblioteca, Reforço escolar, Oficinas de músicas e leitura, Atividade livre na internet, Oficinas de
                            artesanato, Oficinas preparatórias para mercado de trabalho, Grupos de orientação sexual, Atividade
                            pedagógico-recreativo e Atendimento ondotológico e psicossocial.
                        </p>
                    </div>
                </div>
                <div class="fh5co-feature">
                    <div class="fh5co-text animate-box">
                        <h3>Ambiente Feliz e alegre</h3>
                        <p>
                            Aqui tem gente como você fazendo o bem para pequenos cidadãos
                        </p>
                    </div>
                </div>
    
                <div class="fh5co-feature">
                    <div class="fh5co-text animate-box">
                        <h3>Amor e carinho</h3>
                        <p>
                            Doar, acreditar e lutar... Somos uma entidade sem fins lucrativos que atende crianças de 0 a 18 anos.
                        </p>
                    </div>
                </div>
    
                <div class="fh5co-btn-action animate-box">
                    <a href="{{ route('quemsomos.landing') }}" class="btn btn-primary btn-cta">
						Saiba mais
					</a>
                </div>
    
            </div>
        </div>
    </section>
@endsection