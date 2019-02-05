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
    
                <div class="col-md-4 col-sm-6 col-xs-12 animate-box">
                    <a href="img/turma4.jpg" class="fh5co-project-item image-popup">
                        <img src="img/turma4.jpg" alt="Image" class="img-responsive">
                        <div class="fh5co-text">
                            <h2>O Centro da Criança e do Adolescente - CCA/SEMEAR</h2>
                            <p>
                                atendemos uma média de 70 crianças e adolescentes (06 a 14 anos) por ano em situação de vulnerabilidade e risco, contribuindo na sua proteção integral em conjunto com a família e Estado, promovendo o desenvolvimento de suas potencialidades, a partir de ações sócio educativas. 
                            </p>
                        </div>
                    </a>
                </div>
    
                <div class="col-md-4 col-sm-6 col-xs-12 animate-box">
                    <a href="img/turma7.jpg" class="fh5co-project-item image-popup">
                        <img src="img/turma7.jpg" alt="Image" class="img-responsive">
                        <div class="fh5co-text">
                            <h2>A Casa Lar e Saica </h2>
                            <p>
                                atendem 30 crianças em acolhimento institucional divididas em duas casas, tendo como prinicipal objetivo acolhe-las até que tenham sua guarda restabelecida pelo Estado. 
                            </p>
                        </div>
                    </a>
                </div>
    
                <div class="col-md-4 col-sm-6 col-xs-12 animate-box">
                    <a href="img/920078_258107440995346_248871960_o.jpg" class="fh5co-project-item image-popup">
                        <img src="img/920078_258107440995346_248871960_o.jpg" alt="Image" class="img-responsive">
                        <div class="fh5co-text">
                            <h2>ATIVIDADES</h2>
                            <p>
                                A Casa da Criança e do Adolescente oferece atividades como: 
                                Esportes e Recreação
                                Cidadania, Valores, Direitos e Deveres
                                Ensino de Informática
                                Atendimento Psicológico
                                Sensibilização Ambiental
                                Passeios Culturais
                                Ensino de Música
                                Aulas de Inglês
                            </p>
                        </div>
                    </a>
                </div>
    
            </div>
        </div>
    </section>
    

    
    
    <section id="sobre">
        <div class="container">
            <div class="col-md-6 col-md-push-6">
                <figure class="fh5co-feature-image animate-box">
                    <img src="{{ asset('landing/img/home/pulando-corda.jpg') }}" alt="">
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
                    <a href="sobre.php" class="btn btn-primary btn-cta">
						Saiba mais
					</a>
                </div>
    
            </div>
        </div>
    </section>
@endsection