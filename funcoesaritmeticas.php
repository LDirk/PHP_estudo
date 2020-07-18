<!DOCTYPE html>
<html>
<head>

   <meta charset="UTF-8"/>
   <link rel = "stylesheet" href = "_css/estilo.css">



   <Title> Funções Aritméticas </Title>

   <style> 

   H2 {
   		font: 12pt Arial ;
   		color: black;
   }


   </style>


</head>


<body>
<div>

    <?php

		$v1 = $_GET["x"]; //Valor que vem da url
		$v2 = $_GET["y"];

		echo "<h2> Valores recebidos: $v1 e $v2";


		echo " <br> O valor absoluto de $v2 é " . abs($v2);

		echo "<br> O valor de $v1<sup>$v2</sup> é " . pow($v1, $v2);

		echo "<br> A raiz de $v1 é " .sqrt($v1);

		echo "<br> O valor de $v2 arredondado é " . round($v2); // O ceil arredonda sempre pra cima, e o floor arredonda sempre para baixo. 

		echo "<br> O valor inteiro de $v2 é " .intval($v2);

		echo "<br> O valor $v1 em moeda é R$" . number_format($v1,2); //(variavel,casas decimais)

    ?> 

</div>
</body>



</html>