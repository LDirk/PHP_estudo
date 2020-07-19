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

		// Ler o dia da semana(2 - 8) e mostrar se precisa ou não ir para escola 
		 $d = isset($_GET["ds"])?$_GET["ds"]:0;

		 switch ($d) {
		 	case 2:
		 	case 3:
		 	case 4:
		 	case 5:
		 	case 6:
		 		echo "Levanta e vai estudar";
		 		break;
		 	
		 	case 7:
		 	case 8: 
		 		echo "Vai dormir";
		 		break;

		 	default:
		 		echo "Dia da semana invalido";
		 		
		 }
	?> 
				<!-- código js para voltar uma pagina -->
	<br/><a href = "javascript:history.go(-1)" class = "botao">Voltar</a>
	

</div>

</body>
</html>