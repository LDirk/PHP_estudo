
<!DOCTYPE html>
<html>
<head>

  <?php
    $txt = isset($_GET["t"])?$_GET["t"]:"Texto genérico";
    $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
    $cor = isset($_GET["cor"])?$_GET["cor"]:"black";

  ?>  



   <meta charset="UTF-8"/>
   <link rel = "stylesheet" href = "_css/estilo.css">
   <Title> </Title>

   <style> 

      span.texto {
        font-size: <?php echo $tam; ?>; 
        color: <? php eco $cor ; ?>; 
      }

   </style>


</head>


<body>
<div>

  <?php
    echo "<span class="texto">$txt</span>";
  ?>

   	




</div>
</body>



</html>