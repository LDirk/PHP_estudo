<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8"/>
		<title></title>
	</head>
	<body>

		<pre>


		<?php
			require_once "ContaBanco.php"; 

			// Criando os objetos p1 e p2 
			$p1 = new ContaBanco(); // Lucas 
			$p2 = new ContaBanco(); // Amanda 

			$p1->abrirConta("CC"); 
			$p1->setDono("Lucas");
			$p1->setNumConta(1111);
			$p1->depositar(300);
			

			$p2->abrirConta("CP");
			$p2->setDono("Amanda"); 
			$p2->setNumConta(2222);
			$p2->depositar(500);
			$p2->sacar(100);

			print_r($p1); 
			print_r($p2);

		?>


		</pre>


	</body>
</html>