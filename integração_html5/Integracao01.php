
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

    	$valor = $_GET["v"];
    	$rq = sqrt ($valor);


    	echo "A raiz de $valor é igual a " . number_format($rq,2) ;
  
    ?> 

    <a href = "formulario_html5_PHP.html"> Voltar </a>





</div>
</body>



</html>