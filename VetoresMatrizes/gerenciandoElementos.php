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

$n = array(3,4,8,8,9,5,5);

// Adiciona na ultima posição
array_push($n, 7); 
print_r($n);

echo "<br>";

// Elemina o ultimo elemento do vetor
array_pop($n); 
print_r($n);

echo "<br>";

// Colocar um elemento no inicio do vetor
array_unshift($n,7);
print_r($n);

echo "<br>";

// Elemina o primeiro elemento do vetor
array_shift($n);
print_r($n);

?>

     
</pre>
</div>
</body>
</html>