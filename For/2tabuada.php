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
		$n = isset($_GET["num"])?$_GET["num"]:1;

		for ($cont=1 ;$cont<=10;$cont++){
			$resultado = $n*$cont;
			echo "$n x $cont = $resultado <br>";
	}

	?>

	<br><a href = "javascript:history.go(-1)">Voltar</a>


</div>
</body>
</html>