<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include_once('build/head.php') ?>
	<title>ONG - Casa da criança</title>
</head>
<body class="table-warning">
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

	<div class="container-fluid p-4  bg-info">
		<div class="row">
			<div class="col-md-7 text-white">
				O CCA depende de voluntários para suas atividades. Caso tenha interesse envie o seu contato com sua área de experiência aqui. Ou ligue para 5686-3288 às Sexta-Feira entre 8:00 á 12:00.
			</div>
			<div class="col-md-5 text-center">
				<a class="btn btn-outline-light btn-lg" href="/<?=pasta?>/contato">
					<h1 class="h5">Se voluntariar</h1>
				</a>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="card">
			<div class="card-header text-center">
				<h4 class="card-title">ONG - Casa das Crianças </h4>
				<hr width="100">
			</div>
			<div class="card-body">

				<div class="row text-center">
					<div class="col-md-4 shadow-lg">
						<h4 class="h4">Quem Somos</h4>
						<img src="/<?=pasta?>/asset/img/quem-somos-home.jpg">
						<p class="text-justify pt-3 mt-1 " >
							Somos uma entidade sem fins lucrativos que atende crianças de 0 a 18 anos. 
							Apoiamos o processo de desenvolvimento e formação de crianças e adolescentes atendidos em nossos três principais projetos – Casa Lar (Serviços de Acolhimento de Crianças e Adolescentes), Saica (Serviço de Acolhimento Institucional de Crianças e Adolescentes) e CCA (Contra Turno Escolar). 
							Para isso, procuramos oferecer um ambiente acolhedor, baseado em respeito e carinho, que possibilite o desenvolvimento integral das crianças e adolescentes atendidos na Entidade....
						</p>
						<a href="/<?=pasta?>/quemsomos">
							<small>leia mais...</small>
						</a>
					</div>

				
					<div class="col-md-4 mt-4">
						<h4 class="h4">Como Ajudar</h4>
						<p class="text-justify pt-3  ">
							Cadastre-se aqui para receber informações sobre nossos eventos.
						</p>
						<img src="/<?=pasta?>/asset/img/como-ajudar-home.jpg">
						<p class="text-justify mt-1 pt-3">
							Existem diversas formas de ajudar!
							Aceitamos doações para apoiar os nossos projetos, <br> bem como doação de materiais (roupas, produtos de limpeza, alimentos, pedagógicos)...
						</p>
						<p class="table-warning shadow">
							A Casa da Criança esta precisando adequar suas instalações para melhor atender nossas crianças. Se você puder nos ajudar, por favor entre em contato...
						</p>
						<a href="/<?=pasta?>/doacoes">
							<small>leia mais...</small>
						</a>
					</div>

					<div class="col-md-4 shadow-lg">
						<h4 class="h4">Projetos</h4>
						<img src="/<?=pasta?>/asset/img/projetos-o.jpg">
						<p class="text-justify pt-3 mt-1">
							<strong> O Centro da Criança e do Adolescente </strong> - CCA atende 70 crianças e adolescentes ( 06 a 14 anos ) separadas em duas salas de aula por período e conta com educadores de diferentes linguagens...
						</p>
						
						<a href="/<?=pasta?>/projetos">
							<small>leia mais...</small>
						</a>
					</div>
				</div>
			</div>
			<div class="card-footer">
				
			</div>
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