<!DOCTYPE html>
<html>
<head>

   <meta charset="UTF-8"/>
   <link rel = "stylesheet" href = "_css/estilo.css">
   <Title> </Title>

   <style>
   </style>

</head>

<body>
<div>
	
	<?php // Ler um número e dizer sua raiz, dobro ou cubo

		$n = isset($_GET["num"])?$_GET["num"]:0;
		$o = isset($_GET["oper"])?$_GET["oper"]:1;

		switch ($o) {

			case 1:
				$resultado = $n*2;
				break;

			case 2:
				$resultado = pow($n,3); 
				break;

			case 3:
				$resultado = sqrt($n); 
		}

		echo "O resultado da operação solicitada foi <span class='foco'>$resultado</span>"

	?>
		
		<a href = "exercicio1.html" class ="botao ">voltar</a>

</div>

</body>
</html>