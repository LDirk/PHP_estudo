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

		$inicio = isset($_GET["ini"])?$_GET["ini"]:1;
		$final = isset($_GET["fi"])?$_GET["fi"]:10;
		$incremento = isset($_GET["inc"])?$_GET["inc"]:1;


		if($final>=$inicio){
			while ($inicio<=$final){

				echo "<br> $inicio";
				$inicio = $inicio + $incremento;


			}
		}

		else{

			while ($inicio > $final){
			echo "<br> $inicio";
			$inicio = $inicio - $incremento;
			}
		}
	?>

	<br/><a href = "javascript:history.go(-1)" class = "botao">Voltar</a>

</div>
</body>
</html>