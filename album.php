
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

		<section id="fh5co-hero" class="js-fullheight" style="background-image: url(img/capaAlbum.jpg);" data-next="yes">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="fh5co-intro js-fullheight">
					<div class="fh5co-intro-text">
					
						<div class="fh5co-left-position">
							<h2 class="animate-box">Album de fotos</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="fh5co-learn-more animate-box">
				<a href="#" class="scroll-btn">
					<span class="text">Ver fotos</span>
					<span class="arrow"><i class="icon-chevron-down"></i></span>
				</a>
			</div>
		</section>
		

		<section id="fh5co-projects">
			<div class="container">
				<div class="row">
					
					<div class="col-md-12 animate-box">
						<div id="album">
							<div data-jgallery-album-title="Album 1" class="album">
								<h1>Album 1</h1>
								<?php for($i=1;$i <= 18; $i++){ ?>
									<a href="img/album/<?=$i ?>.jpg"><img alt="" src="img/album/<?=$i ?>.jpg"></a>
								<?php } ?>
							</div>
							<div data-jgallery-album-title="Album 2" class="album">
								<h1>Album 1</h1>
								<?php for($i=1;$i <= 18; $i++){ ?>
									<a href="img/album/<?=$i ?>.jpg"><img alt="" src="img/album/<?=$i ?>.jpg"></a>
								<?php } ?>
							</div>

							<div data-jgallery-album-title="Album 3" class="album">
								<h1>Album 1</h1>
								<?php for($i=1;$i <= 18; $i++){ ?>
									<a href="img/album/<?=$i ?>.jpg"><img alt="" src="img/album/<?=$i ?>.jpg"></a>
								<?php } ?>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>

		<?php
			require_once('build/footer.php');
		?>

	</body>
	<script type="text/javascript">
	

$( function() {
	$( '#album' ).jGallery( {
		autostart: true,
		zoomSize: '100%'
	});
});


</script>

	</script>
</html>

