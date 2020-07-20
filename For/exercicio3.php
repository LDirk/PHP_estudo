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

		$numero = isset($_GET["num"])?$_GET["num"]:1; 


		if ($numero == 1){
			echo ("1 Não é primo");
		}

		else {

			$resultado = 0; 
			for ($contador=1;$contador<$numero;$contador++){
				
				if ($numero%$contador==0){
					$resultado++;	
				}

			}
			
			if ($resultado ==1) {
				echo ("O número $numero é primo");
			}

			else {
				echo ("O número $numero não é primo");
			}
		}

	?>

	<br>
	<br><a href = "javascript:history.go(-1)" class = "botao" >Voltar</a>


</div>
</body>
</html>