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
	// exibir a tabuada de um número escolhido pelo usuário, de 1 a 10

		$valor = isset($_GET["tab"])?$_GET["tab"]:1;

		$contador = 0;

		do{

			$resultado = $valor*$contador; 

			echo ("<br> $valor x $contador = $resultado");

			$contador++;

		}while($contador<=10);


	?>

	<p><a href = "exercicio3.html">Voltar</a></p>


</div>
</body>
</html>