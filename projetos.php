
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<?php
			require_once('build/head.php');
		?>
	</head>
	<body>

	<!-- Loader -->
	<div class="fh5co-loader"></div>
	
	<div id="fh5co-page">
		<?php
			require_once('build/navbar.php');
		?>
		<section id="fh5co-hero" class="js-fullheight" style="background-image: url(img/sejabemvindos.jpg);" data-next="yes">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="fh5co-intro js-fullheight">
					<div class="fh5co-intro-text">
						<!-- 
							INFO:
							Change the class to 'fh5co-right-position' or 'fh5co-center-position' to change the layout position
							Example:
							<div class="fh5co-right-position">
						-->
						<div class="fh5co-left-position">
							<h2 class="animate-box">Casa da criança</h2>
							<small>Seja voluntario para ajudar a ong</small>
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

		<!-- END #fh5co-hero -->
		<div class="fb-page"  data-href="https://www.facebook.com/CasaDaCriancaEDoAdolecenteSantoAmaroGrossarl/" data-tabs="timeline" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
			<blockquote cite="https://www.facebook.com/CasaDaCriancaEDoAdolecenteSantoAmaroGrossarl/" class="fb-xfbml-parse-ignore">
				<a href="https://www.facebook.com/CasaDaCriancaEDoAdolecenteSantoAmaroGrossarl/">Casa da Criança e do Adolescente Santo Amaro</a>
			</blockquote>
		</div>	
	
		<?php
			require_once('build/footer.php');
		?>

	</body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</html>

