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
	// Passagem por referência
	function teste (&$x){
		$x = $x + 2;
		echo $x;

	}

	$a=3; 
	teste($a);

	// Vai alterar o valor de a.
	echo("<br>$a");



	?>







</div>
</body>
</html>