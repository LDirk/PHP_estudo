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

    $vetor = range(5,20,5); 
    // vetor fica com 5,10,15,20 . começa de 5 vai de 5 em 5 até chegar a 20
    print_r($vetor);

    // Para cada elemento do vetor tratado como valor, mostre na tela
    foreach ($vetor as $valor) {
      echo "$valor ";
    }

     ?>

   
</pre>
</div>
</body>
</html>