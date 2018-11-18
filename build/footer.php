<form target="pagseguro" action="https://pagseguro.uol.com.br/checkout/doacao.jhtml" method="post" style="display: none" class="pagseguro-form">
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
								<!-- <li><a href="#">Pricing</a></li> -->
								<!-- <li><a href="#">Team</a></li> -->
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
								<a href="mailto:casadacriancacca@hotmail.com">casadacriancacca@hotmail.com</a> <br>
								Santo Amaro Grossarl Rua Padre Chico, 320 <br>
								Santo Amaro - São Paulo - SP / Cep: 04747-090 <br>

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
								<li><a href="#"><i class="icon-google-plus"></i></a></li>
								<li><a href="#"><i class="fas fa-"></i></a></li>
								<li><a href="http://www.linkedin.com/"><i class="icon-linkdin"></i></a></li>
							</ul>
						</div>
					</div>

				</div>
				
			</div>
			<div class="fh5co-copyright animate-box">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="fh5co-left">
								<small>&copy; 2018 <a href="index.php"><img src="img/logo.png"></a> </small>
							</p>
							<p class="fh5co-right">
								<small class="fh5co-right">
									Desenvolvido por: 
									<a href="https://www.linkedin.com/in/guilherme-gama-529b5415b" target="_blank">Guilherme Gama</a>, &nbsp;
									<a href="#" target="_blank">Deivid Bitchner</a>, &nbsp;
									<a href="https://www.linkedin.com/in/vitor-kevin-048811165" target="_blank">Vito Kevin</a>
								</small>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- END #fh5co-footer -->
	</div>
	<!-- END #fh5co-page -->
	
	<!-- For demo purposes Only ( You may delete this anytime :-) -->
	<div id="colour-variations">
	
		<button type="button" class="btn btn-primary btn-doar btn-block">
			Doar
		</button>
	</div>
	<!-- End demo purposes only -->

	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	

	<!-- End demo purposes only -->

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	<!-- 
	INFO:
	jQuery Cookie for Demo Purposes Only. 
	The code below is to toggle the layout to boxed or wide 
	-->
	<script src="js/jquery.cookie.js"></script>
	<script type="text/javascript">
		
		
		
		$(document).ready(function(){
		  // Add smooth scrolling to all links
		  $("a").on('click', function(event) {

		    // Make sure this.hash has a value before overriding default behavior
		    if (this.hash !== "") {
		      // Prevent default anchor click behavior
		      event.preventDefault();

		      // Store hash
		      var hash = this.hash;

		      // Using jQuery's animate() method to add smooth page scroll
		      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		      $('html, body').animate({
		        scrollTop: $(hash).offset().top
		      }, 800, function(){
		   
		        // Add hash (#) to URL when done scrolling (default click behavior)
		        window.location.hash = hash;
		      });
		    } // End if
		  });
		});

		$('.btn-doar').click(function(){
			$('.pagseguro-form').submit();
		});
	</script>