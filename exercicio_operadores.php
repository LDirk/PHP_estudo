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

    // Adição, $a = $a+ $b, $a += $b
    // Subtração, $a = $a - $b , $a -= $b
    // Multiplicação, $a = $a * $b, $a *= $b
    // Divisão, $a = $a / $b, $a /= $b 
    // Modulo,  $a = $a % $b, $a %= $b
    // Concatenação, $a = $a.$b, $a .= $b

    // 1) Aplicar 10% de aumento em um produto. 

    	$preco = $_GET["p"];

    	echo "O preço do produto é R$ $preco";

    	$preco =  ($preco*1.10);
    	echo "</br> O preço com 10% de aumento será R$ " . number_format($preco,2);


		$preco =  ($preco*0.9);
    	echo "</br> O preço com 10% de desconto será R$ " . number_format($preco,2);

    // Pré-incremento $a = $a + 1 , ++$a
    // Pos-incremento $a = $a + 1, $a++
    // Pre-Decremento $a = $a - 1,  --$a
    // Pós-Decremento $a = $a - 1, $a--

    // 2) Mostrar qual foi o ano interior ao passado na url. 
    	$atual = $_GET["a"];

    	echo "</br><br> O ano atual é $atual e o ano anterior é" . --$atual;

    // 3) Praticar o uso de variaveis referenciadas. 


    	$a = 3;
    	$b = $a; 
    	// b vai somar a + 5
    	$b += 5; 

    	echo "<br><br> A variavel A vale $a";
    	echo "<br> A variavel B vale $b";

    // Variaveis de variáveis

    	/* Exemplo
    	$site = "Curso em video"; 
    	$$site = "CursoPHP";
		*/

    // 4) Praticar o uso de variaveis de variaveis. 
    	$x = "abc"; 
    	$$x = "def"; 
    	echo " <br><br> O conteudo da variavel X é $x ";
    	echo "<br> A varivel criada recebeu o valor $abc";



    ?> 

</div>
</body>



</html>