
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

    	// isset = não configurado

    	$nome = isset($_GET["nome"])?$_GET["nome"]:"[Não Informado]";

    	$ano = $_GET["ano"];


    	$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";

    	// date(Y) gera o ano atual, hoje 2020
    	$idade = date("Y") - $ano;
  	
  		echo "$nome é $sexo e tem $idade anos"
  		
    ?> 

   	<a href = "integracao02.html"> Voltar</a>




</div>
</body>



</html>