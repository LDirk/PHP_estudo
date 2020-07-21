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

  	$n = array(array(2,3),array(3,4),array(9,5));

  	// 0 |2 3|
  	// 1 |3 4|
  	// 2 |9 5|

  	// Referenciar um elemento especifico
  	
  	$n[2][0] = $n[1][1];

  	// A matriz vira : 
  	// 0|2 3|
  	// 1|3 4|
  	// 2|4 5|
     ?>

     
 </pre>


</div>
</body>
</html>