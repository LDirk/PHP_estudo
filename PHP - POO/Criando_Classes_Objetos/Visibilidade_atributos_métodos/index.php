<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8"/>


<Title> </Title>

</head>


<body>
<pre>
	<?php 

	require_once "Caneta.php"; 

	$c1 = new Caneta; 

	// modelo e cor são atributos publicos, não dará erro mexer. 
	$c1 ->modelo = "Bic Cristal"; 
	$c1 ->cor = "Azul";

	// vai dar erro, pois o atributo ponta é é private 
	// $c1->ponta = 0.5;

	// vai dar erro, pois carga é protected. 
	// $c1 ->carga = 99; 

	//vai dar erro, pois tampada é protected 
	//$c1 ->tampada = true; 

	print_r($c1);

	// rabiscar é publico. 
	$c1 -> rabiscar();

	// vai dar erro, tampar é private
	// $c1 -> tampar();


	// Se o método for publico e o atributo for protegido, ele vai realizar o método sem erro. 
	
	?>
</pre>
</body>

</html>
