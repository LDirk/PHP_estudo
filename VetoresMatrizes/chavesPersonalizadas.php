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

    $v = array(3=>5,1=>9,0=>8,7=>7);
    print_r ($v);
     
    $v[] = "E"; // O ultimo indice entra E, no caso do exemplo 8 recebe E
    print_r($v);

    unset($v[8]); // voce desaloca o vetor da posição 8, destroi o ultimo elemento 
    print_r($v);


     ?>
 </pre>


</div>
</body>
</html>