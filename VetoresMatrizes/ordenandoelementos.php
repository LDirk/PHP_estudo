
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

$a = array(2,10,-50,28,89);
$b = array("D","F","A","X");

// Para odernar 
sort($a);
sort($b);


print_r($a);
print_r($b);

echo "<br><br>";

// Para ordenar de forma descrescente/reversa
rsort($a);
rsort($b);

print_r($a);
print_r($b);

// Ordenação associativa, move inclusive a posição dos indices na ordenação crescente. 
asort($a); 
print_r($a); 

echo "<br>";

// Ordenação associativa reversa, move inclusive a posição dos indices na ordenação decrescente. 
arsort($a); 
print_r($a); 

echo "<br>";

// Ordenação por chaves, voce ordena por indice, ksort 
// Ordenação por chaves, voce ordena por indice em ordem reversa, krsort
?>

   
</pre>
</div>
</body>
</html>