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

	// Contador de 1 até 10

		$contador = 1;

		do {
			echo "$contador<br>"; 
			$contador++;

		}while($contador<=10);

	// Contador de 10 até 1
		
		$contador = 10; 

		do{
			echo "$contador<br>";
			$contador--;
		}while($contador>=1);



	?>

</div>
</body>
</html>