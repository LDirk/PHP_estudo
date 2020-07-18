
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
    // Ler o ano de nascimento de uma pessoa e mostrar se ela pode votar e dirigir. 
    $a = isset($_GET["ano"])?$_GET["ano"]:1900;
    $i = date("Y") - $a; 

    echo "Voce nasceu em $a, logo tem $i anos";

    if ($i<16){
      $v = " votar é proibido"; 
      $d = "não pode dirigir";
    }


    elseif ($i >= 16 and $i <18){
      $v = "voto é opcional";
      $d = "não pode dirigir";
    }

    elseif($i>=18 and $i<=65){
      $v = "voto é obrigatorio";
      $d = "pode dirigir";    
    }

    else{
      $v = "votar é opcional";
      $d = "pode dirigir";     
    }

    echo "<br> Com essa idade voce tem $v e também $d";


  ?>

   	




</div>
</body>

</html>