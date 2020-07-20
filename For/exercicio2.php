<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8"/>
   <link rel = "stylesheet" href = "_css/estilo.css">
   <Title> </Title>
</head>

<body>
<div>
	
		<form method="get" action="2tabuada.php">

			<select name = "num">
				<?php
					for ($c=1;$c<=10;$c++){
					echo "<option>$c</option>";
				}
				?>
			</select>
			<input type = "submit" value = "Tabuada">

				
		</form>



	


</div>
</body>
</html>