
<!DOCTYPE html>
<html>
	<head>

   		<meta charset="UTF-8"/>
   		<link rel = "stylesheet" href = "_css/estilo.css">
   		<Title> </Title>

	</head>

	<h1>Projeto Controle Remoto</h1>
	<body>
		<pre>

		<?php 
		
		require_once "ControleRemoto.php"; 
		$c = new ControleRemoto();

		$c->ligar();
		$c->maisVolume();




		$c->abrirMenu();

		?>

		</pre>
	</body>
</html>