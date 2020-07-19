<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8"/>
   <link rel = "stylesheet" href = "_css/estilo.css">
   <Title> </Title>
</head>
<body>
<div>

	<form method = "get" action = "exercicioparte2.php">

		<?php
		// criar dinamicamente 5 caixas de texto em um formulário
		$contador = 1;

		while ($contador<=5){

			echo "valor $contador: <input type = 'number' name ='v$contador' max = '100' min='0' value = '0' /> <br/>";
			$contador ++;

		}

		?>

		<input type = "submit" value = "Enviar" class = "botao"/>

	</form>


</div>
</body>
</html>