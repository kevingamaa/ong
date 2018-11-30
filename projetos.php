
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<?php
			require_once('build/head.php');
		?>
		<style type="text/css">
			.fb-page, 
			.fb-page span, 
			.fb-page span iframe[style] { 
			    width: 100% !important; 
			}
		</style>
	</head>
	<body>

	<!-- Loader -->
	<div class="fh5co-loader"></div>
	
	<div id="fh5co-page">
		<?php
			require_once('build/navbar.php');
		?>
		<section id="fh5co-hero" class="js-fullheight" style="background-image: url(img/850_400_diacriancas.jpg);" data-next="yes">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="fh5co-intro js-fullheight">
					<div class="fh5co-intro-text">
					>
						-->
						<div class="fh5co-left-position">
							<h2 class="animate-box">Projetos e Eventos</h2>
							<small>Seja voluntario para ajudar a ong em eventos</small>
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
					<span class="arrow"><i class="icon-chevron-down"></i></span>
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
						<div class="fb-page"  data-href="https://www.facebook.com/CasaDaCriancaEDoAdolecenteSantoAmaroGrossarl/" data-tabs="timeline" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
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
							<li class="animate-box">
								<h2>O Centro da Criança e do Adolescente - CCA/SEMEAR</h2>
								<p>
								Atendemos uma média de 70 crianças e adolescentes (06 a 14 anos) por ano em situação de vulnerabilidade e risco, contribuindo na sua proteção integral em conjunto com a família e Estado, promovendo o desenvolvimento de suas potencialidades, a partir de ações sócio educativas. 
								</p>
							</li>
							<li class="animate-box">
								<h2>Casa Lar e Saica</h2>
								<p>
								A Casa Lar e Saica atende 30 crianças em acolhimento institucional divididas em duas casas, tendo como prinicipal objetivo acolhe-las até que tenham sua guarda restabelecida pelo Estado. 


								</p>
							</li>
							<li class="animate-box">
								<h2>ATIVIDADES</h2>

								<p>
								&#9679; Esporte e Recreação<br> &#9679;	Cidadania, Valores, Direitos e Deveres<br>&#9679; Ensino de Informática<br> &#9679;	Atendimento Psicológico<br> &#9679;	Sensibilização Ambiental<br> &#9679; Passeios Culturais<br> &#9679;	Ensino de Música<br> &#9679; Aulas de Inglês
								</p>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	
		<?php
			require_once('build/footer.php');
		?>

	</body>
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
		  	var js, fjs = d.getElementsByTagName(s)[0];
		  	if (d.getElementById(id)) return;
	  		js = d.createElement(s); js.id = id;
	  		js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2';
	  		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
</html>

