<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include_once('build/head.php') ?>
	<title>ONG - Casa da criança</title>

</head>
<body class="bg-light">
	<?php 
		include_once('build/navbar.php') 
	?>

	<header class="projeto" style=" ">

	</header>

	<div class="container-fluid">
		<div class="row p-4">			
			
			<div class="col-md-8">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src=".../100px180/" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Card title</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>

			<aside class="col-md-3 p-3 border border-secondary rounded " style="background-color: #f2f2f2">
				<h3>
					Contato
				</h3>
				<strong class="indiceNav">E-mail: </strong><small><a href="mailto:casa@casadacriancasantoamaro.org.br"> casa@casadacriancasantoamaro.org.br</a></small><br>
				<strong class="indiceNav">Telefone: </strong><small><a href="tel:1156863288"> 55 11 5686.3288 </a> / <a href="tel:36242660"> 3624.2660</a></small><br>
					<strong class="indiceNav">Fax: </strong><small>55 11 5686.3288</small><br>
				<strong class="indiceNav">Endereço: </strong><small>Rua Padre chico, 320 - Santo Amaro - SP</small><br>
				
				<a href="doacoes" class="btn btn-block btn-outline-primary mt-4">
					FAÇA SUA DOAÇÃO
				</a>
				<br>
				<strong class="indiceNav">Como chegar:</strong><small>
				<br>
				<iframe style="width: 100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-br&amp;q=R.+Padre+Chico,+320+-+Santo+Amaro,+S%C3%A3o+Paulo,+04747-090&amp;sll=-14.179186,-50.449219&amp;sspn=91.125623,186.152344&amp;ie=UTF8&amp;cd=1&amp;geocode=FcEGl_4d53Y3_Q&amp;split=0&amp;hq=&amp;hnear=R.+Padre+Chico,+320+-+Santo+Amaro,+S%C3%A3o+Paulo,+04747-090&amp;ll=-23.656789,-46.696701&amp;spn=0.015724,0.023174&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
				<div class="text-center">
					<a href="http://www.redial.net.br/casadacrianca/content/8-recaridade" target="_blank">
						<img src="/<?=pasta?>/asset/img/redial-net.jpg">
					</a>
				</div>
			</aside>

		</div>
	</div>

	<?php include_once('build/footer.php') ?>
</body>
</html>