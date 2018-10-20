<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include_once('build/head.php') ?>
	<title>ONG - Casa da criança</title>
</head>
<body class="bg-light">
	<?php include_once('build/navbar.php') ?>


	<header id="header">
		

		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		    <div class="carousel-inner">

		    	<ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
				</ol>

		        <div class="carousel-item active">
		        	<div data-bg="/<?=pasta?>/asset/img/banner_1.jpg" class="carousel-img d-block w-100 p-4" ></div>
		        </div>
		        <div class="carousel-item">
		        	<div data-bg="/<?=pasta?>/asset/img/banner_2.jpg" class="carousel-img d-block w-100"></div>

		        </div>
		        <div class="carousel-item">
		        	<div data-bg="/<?=pasta?>/asset/img/banner_3.jpg" class="carousel-img d-block w-100"></div>
		        </div>
		        <div class="carousel-item">
		        	<div data-bg="/<?=pasta?>/asset/img/banner_4.jpg" class="carousel-img d-block w-100"></div>
		        </div>

		        <div class="carousel-item">
		        	<div data-bg="/<?=pasta?>/asset/img/banner_5.jpg" class="carousel-img d-block w-100"></div>
		        </div>
		    </div>

		    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    </a>

		    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    </a>

		</div>

	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-right">
				<a class="btn btn-outline-light btn-lg"> href="<?=pasta?>">
					
				</a>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-header">
			<h4 class="card-title">Titulos</h4>
		</div>
		<div class="card-body">
			
		</div>
		<div class="card-footer">
			
		</div>
	</div>

	<?php include_once('build/footer.php') ?>
	<script type="text/javascript">
		$('.carousel-img').ready(function(){

			$.each($('.carousel-img'), function(e, i){
				// console.log($(this).data('bg'))
				var bg =$(this).data('bg') ;
				console.log(bg)
				$(this).css('background-image', 'url('+bg+')');
			});

		});
	</script>
</body>
</html>