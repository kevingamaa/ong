
	<footer id="fh5co-footer">
		<div class="container">
			<div class="row row-bottom-padded-md">
				<div class="col-md-3 col-sm-6 col-xs-12 animate-box">
					<div class="fh5co-footer-widget">
						<h3>Company</h3>
						<ul class="fh5co-links">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Feature Tour</a></li>
							<li><a href="#">Pricing</a></li>
							<li><a href="#">Team</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12 animate-box">
					<div class="fh5co-footer-widget">
						<h3>Support</h3>
						<ul class="fh5co-links">
							<li><a href="#">Knowledge Base</a></li>
							<li><a href="#">24/7 Call Support</a></li>
							<li><a href="#">Video Demos</a></li>
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12 animate-box">
					<div class="fh5co-footer-widget">
						<h3>Contact Us</h3>
						<p>
							<a href="mailto:info@freehtml5.co">info@freehtml5.co</a> <br>
							198 West 21th Street, <br>
							Suite 721 New York NY 10016 <br>
							<a href="tel:+123456789">+12 34  5677 89</a>
						</p>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12 animate-box">
					<div class="fh5co-footer-widget">
						<h3>Follow Us</h3>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-google-plus"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
							<li><a href="#"><i class="icon-youtube-play"></i></a></li>
						</ul>
					</div>
				</div>

			</div>
			
		</div>
		<div class="fh5co-copyright animate-box">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="fh5co-left"><small>&copy; 2018 <a href="index.html">Guide</a> free html5. All Rights Reserved.</small></p>
						<p class="fh5co-right">
							<small class="fh5co-right">
								Desenvolvido por: 
								<a href="http://freehtml5.co" target="_blank">Guilherme Gama</a>, &nbsp;
								<a href="http://freehtml5.co" target="_blank">Vitor Kevin</a>,&nbsp;
								<a href="http://freehtml5.co" target="_blank">David Bitner</a>
								
							</small>
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- END #fh5co-footer -->
</div>
<!-- FEchamento da pagina -->

<!-- For demo purposes Only ( You may delete this anytime :-) -->
<div id="colour-variations">
	<a class="option-toggle"><i class="icon-gear"></i></a>
	<h3>Preset Colors</h3>
	<ul>
		<li><a href="javascript: void(0);" data-theme="style"></a></li>
		<li><a href="javascript: void(0);" data-theme="red"></a></li>
		<li><a href="javascript: void(0);" data-theme="turquoise"></a></li>
		<li><a href="javascript: void(0);" data-theme="blue"></a></li>
		<li><a href="javascript: void(0);" data-theme="orange"></a></li>
		<li><a href="javascript: void(0);" data-theme="yellow"></a></li>
		<li><a href="javascript: void(0);" data-theme="pink"></a></li>
		<li><a href="javascript: void(0);" data-theme="purple"></a></li>
	</ul>
	<a href="#" data-layout="boxed">Boxed</a>
	<a href="#" data-layout="wide">Wide</a>
</div>
<!-- End demo purposes only -->

<!-- jQuery -->
<script src="/<?=pasta?>/asset/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="/<?=pasta?>/asset/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="/<?=pasta?>/asset/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="/<?=pasta?>/asset/js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="/<?=pasta?>/asset/js/jquery.flexslider-min.js"></script>
<!-- Magnific Popup -->
<script src="/<?=pasta?>/asset/js/jquery.magnific-popup.min.js"></script>
<script src="/<?=pasta?>/asset/js/magnific-popup-options.js"></script>

<!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
<script src="/<?=pasta?>/asset/js/jquery.style.switcher.js"></script>
<script>
$(function(){
	$('#colour-variations ul').styleSwitcher({
		defaultThemeId: 'theme-switch',
		hasPreview: false,
		cookie: {
          	expires: 30,
          	isManagingLoad: true
      	}
	});	
	$('.option-toggle').click(function() {
		$('#colour-variations').toggleClass('sleep');
	});
});
</script>
<!-- End demo purposes only -->

<!-- Main JS (Do not remove) -->
<script src="/<?=pasta?>/asset/js/main.js"></script>

<!-- 
INFO:
jQuery Cookie for Demo Purposes Only. 
The code below is to toggle the layout to boxed or wide 
-->
<script src="/<?=pasta?>/asset/js/jquery.cookie.js"></script>
<script>
$(function(){

	if ( $.cookie('layoutCookie') != '' ) {
		$('body').addClass($.cookie('layoutCookie'));
	}

	$('a[data-layout="boxed"]').click(function(event){
		event.preventDefault();
		$.cookie('layoutCookie', 'boxed', { expires: 7, path: '/'});
		$('body').addClass($.cookie('layoutCookie')); // the value is boxed.
	});

	$('a[data-layout="wide"]').click(function(event){
		event.preventDefault();
		$('body').removeClass($.cookie('layoutCookie')); // the value is boxed.
		$.removeCookie('layoutCookie', { path: '/' }); // remove the value of our cookie 'layoutCookie'
	});
});
</script>