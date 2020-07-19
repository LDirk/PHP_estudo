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
	
	<?php 

		$regiao = isset($_GET["estado"])?$_GET["estado"]:0;


		switch ($regiao) {

			case "norte":
				echo "O estado é do Norte";
				break;

			case "sul":
				echo "O estado é do sul";
				break;

			case "nordeste":
				echo "O estado é do nordeste";
				break; 

			case "sudeste":
				echo "O estado é do sudeste";
				break;

			case "centrooeste":
				echo "O estado é do centro oeste";
					
		}

	?>

	<br/><a href = "javascript:history.go(-1)" class = "botao">Voltar</a>
	

</div>

</body>
</html>