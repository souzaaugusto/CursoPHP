<!DOCTYPE html>
<html>
<head>
	<title>Treinando PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="_css/estilo.css"/>

</head>
<body>
<div>
	<h1>Exercicio 2 - Aula 13</h1>
	<form method="get" action="aula13-ex2.php">
		<select name="num">
			<?php
			  for ($c=1; $c <=10 ; $c++) { 
			  	echo "<option>$c</option>";
			  }
			?>
		</select>
		<input type="submit" value="tabuada"/>
	</form>
</div>
</body>
</html>