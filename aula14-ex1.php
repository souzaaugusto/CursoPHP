<html lang="pt-br">
<head>
	<title>Testando PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
<div>
	<h1>Exercicio 1 - Aula 14</h1>
	<?php
	  function soma($a,$b){
	  	$s=$a+$b;
	  	echo "<p> A soma vale $s</p>";
	  }
	  soma(3,4);
	  soma(8,2);
	  $x=9;
	  $y=15;
	  soma($x,$y);
	?>

    
</div>
</head>
</body>
</html>