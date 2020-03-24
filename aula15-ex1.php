<html lang="pt-br">
<head>
	<title>Testando PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
<div>
	<h1>Exercicio 1 - Aula 15</h1>
	<?php
	  function teste(&$x){
	  	$x+=2;
	  	echo "<p> o valor de x e $x</p>";
	  }
	  $a= 3;
	  teste($a);
	  echo "<p> o valor de a e $a</p>";
	  
	?>

    
</div>
</head>
</body>
</html>