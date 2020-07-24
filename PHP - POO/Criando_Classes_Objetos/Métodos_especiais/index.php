<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8"/>

	</head>
	<body>

	<pre>
	<?php 

		require_once "Caneta.php"; 

		$c1 = new Caneta(); 

		print_r($c1);

		//Modelo é publico, então pode usar o método normal e o set. 
		//$c1->setModelo("Bic");

		//Ponta é privada, então precisa usar o set. 
		//$c1->setPonta(0.5); 


		//print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()} ";

	?>
	</pre>


	</body>
</html>