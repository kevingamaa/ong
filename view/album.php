<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include_once('build/head.php') ?>
	<title>ONG - Casa da criança</title>
</head>
<body class="bg-light">
	<?php include_once('build/navbar.php') ?>

	


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