<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8"/>
   <link rel = "stylesheet" href = "_css/estilo.css">
   <Title> </Title>
</head>
<body>
<div>
	<?php
		$v = isset($_GET["val"])?$_GET["val"]:1;
		echo "<h1> Calculando o fatorial de $v </h1>";

		$contador = $v; 
		$fat = 1;
		do{
			$fat = $fat*$contador;
			$contador--;

		}while ($contador>=1);
		echo "<h2> $v ! = $fat ";

	?>

	<p><a href = "exercicio2.html">Voltar</a></p>


</div>
</body>
</html>