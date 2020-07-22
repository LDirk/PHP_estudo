<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8"/>
<link rel = "stylesheet" href = "_css/estilo.css">

<Title> </Title>

</head>


<body>

<?php 

	require_once "Caneta.php"; 

	$caneta1 = new caneta;  

	$caneta1 -> cor = "Azul";
	$caneta1 -> ponta = 0.5;
	$caneta1 -> tampada = false; 


	$caneta1->tampar();
	$caneta1->rabiscar();

	echo "<br>"; 
	$caneta1->destampar();
	$caneta1->rabiscar();

	echo "<br>";  
	print_r($caneta1)

	
?>



</body>


</html>