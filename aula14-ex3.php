<html lang="pt-br">
<head>
	<title>Testando PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
<div>
	<h1>Exercicio 3 - Aula 14</h1>
	<?php
	  function soma() {
	  	$p= func_get_args();
	  	$t= func_num_args();
	  	$s=0;
	  	for ($i=0; $i <$t ; $i++) { 
	  		$s+=$p[$i];
	  	}
	  	return $s;
	  }
	  $r=soma(3,5,2,8,9,4);
	  echo "A soma dos valores e $r";
	  
	?>

    
</div>
</head>
</body>
</html>