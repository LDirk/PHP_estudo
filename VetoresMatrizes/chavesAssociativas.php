<!DOCTYPE html>
<html>
<head>

   <meta charset="UTF-8"/>
   <link rel = "stylesheet" href = "_css/estilo.css">

   <Title> </Title>



</head>
<body>
<div>

<pre>

    <?php
    $cad = array("nome"=>"Ana", "idade"=>23, "peso" =>78.5); 
    $cad["fuma"] = true;

    foreach ($cad as $campo => $valor) {
      echo "$campo=$valor <br> "; 
    }

    print_r($cad);



     ?>
 </pre>


</div>
</body>
</html>