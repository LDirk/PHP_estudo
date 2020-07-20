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


        // Rotina com multiplos parâmetros. 
        function soma(){

            // Pega todos os argumentos e poem dentro do vetor chamado p.
            $p = func_get_args();

            // Retorna o número de argumentos que foram passados. 
            $t = func_num_args();

            $s = 0;

            for ($i=0; $i<$t;$i++){
                $s += $p[$i]; 

            }

            return $s; 
        }


        $r = soma(3,5,2,8,9,4);
        echo "A soma dos valores é $r";


    ?>

</div>
</body>
</html>