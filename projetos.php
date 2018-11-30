
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
								<a href="#" class="btn btn-primary">
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
					<div class="col-md-6">
						<h2 class="fh5co-lead animate-box">Nossa pagina no facebook</h2>
						<p class="fh5co-sub-lead animate-box">
							Focamos para dar o melhor para as crianças 
						</p>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-md-6  animate-box ">
						<div class="fb-page"  data-href="https://www.facebook.com/CasaDaCriancaEDoAdolecenteSantoAmaroGrossarl/" data-tabs="timeline" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
							<blockquote cite="https://www.facebook.com/CasaDaCriancaEDoAdolecenteSantoAmaroGrossarl/" class="fb-xfbml-parse-ignore">
								<a href="https://www.facebook.com/CasaDaCriancaEDoAdolecenteSantoAmaroGrossarl/">Casa da Criança e do Adolescente Santo Amaro</a>
							</blockquote>
						</div>	
					</div>
					<div class="col-md-6">
						
					</div>
				</div>
			</div>
		</section>
		<!-- END #fh5co-hero -->

		<div id="fh5co-faqs">
			<div class="container">
				<div class="row row-bottom-padded-lg">
					<div class="col-md-6 col-md-offset-3 text-center">
						<div class="fh5co-label animate-box">subtitulo</div>
						<h2 class="fh5co-lead animate-box">Nossos projetos</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<ul class="fh5co-faq-list">
							<li class="animate-box">
								<h2>Titulo</h2>
								<p>
									texto texto texto texto texto texto texto texto texto 
									texto texto texto texto texto texto texto texto texto 
									texto texto texto texto texto texto texto texto texto 
									texto texto texto texto texto texto texto texto texto 
								</p>
							</li>
							<li class="animate-box">
								<h2>Titulo</h2>
								<p>
									texto texto texto texto texto texto texto texto texto 
									texto texto texto texto texto texto texto texto texto 
									texto texto texto texto texto texto texto texto texto 
									texto texto texto texto texto texto texto texto texto 
								</p>
							</li>
							<li class="animate-box">
								<h2>Titulo</h2>
								<p>
									texto texto texto texto texto texto texto texto texto 
									texto texto texto texto texto texto texto texto texto 
									texto texto texto texto texto texto texto texto texto 
									texto texto texto texto texto texto texto texto texto 
								</p>
							</li>
							<li class="animate-box">
								<h2>Titulo</h2>
								<p>
									texto texto texto texto texto texto texto texto texto 
									texto texto texto texto texto texto texto texto texto 
									texto texto texto texto texto texto texto texto texto 
									texto texto texto texto texto texto texto texto texto 
								</p>
							</li>
							<li class="animate-box">
								<h2>Titulo</h2>
								<p>
									texto texto texto texto texto texto texto texto texto 
									texto texto texto texto texto texto texto texto texto 
									texto texto texto texto texto texto texto texto texto 
									texto texto texto texto texto texto texto texto texto 
								</p>
							</li>
							<li class="animate-box">
								<h2>Titulo</h2>
								<p>
									texto texto texto texto texto texto texto texto texto 
									texto texto texto texto texto texto texto texto texto 
									texto texto texto texto texto texto texto texto texto 
									texto texto texto texto texto texto texto texto texto 
								</p>
							</li>
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

