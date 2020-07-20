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

        function soma ($a, $b){
            $s = $a+$b ; 
            echo "<p> A soma vale $s </p>";
        }

        soma(3,4);
        soma(8,2);

        $x = 9;
        $y = 15;
        soma($x, $y);


        function soma2($a,$b){
            $s = $a + $b; 
            return $s;
        }

        $x = 3;
        $y = 4; 
        $r = soma2($x,$y);
        echo " <p> A soma entre $x e $y é igual a $r </p>";

    


    ?>

</div>
</body>
</html>