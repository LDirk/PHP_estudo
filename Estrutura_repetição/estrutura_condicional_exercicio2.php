
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
  // Ler a nota do aluno e dizer se ele foi aprovado. 

  $n1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
  $n2 = isset($_GET["nota2"])?$_GET["nota2"]:0;

  $media = ($n1+$n2)/2;

  if ($media<6 and $media>=0){
    $situacao = "Aluno  de  recuperação ";
  }

  elseif($media>=6 and $media<=10){
    $situacao = "Aluno aprovado";
  }

  else{
    $situacao = "Por favor, digite notas válidas, 0 a 10";
  }


  echo "O aluno ficou com $media de média, $situacao";


  ?>
  


</div>
</body>

</html>