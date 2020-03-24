<html lang="pt-br">
<head>
	<title>Testando PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
<div>
	<h1>Exercicio 1 - Aula 10</h1>
	<?php
	  $n=isset($_GET["num"])?$_GET["num"]:0;
	  $o=isset($_GET["oper"])?$_GET["oper"]:1;
	  switch ($o) {
	  	case 1:
	  		$r= $n*2;
	  		break;
	  	case 2:
	  	    $r=pow($n, 3);
	  	    break;
	  	case 3:
	  	    $r=sqrt($n);    
	  }
	  echo "O resultado da operacao solicitada foi <span calss='foco'>$r";
	?>
    <a href="ex1-aula10.html">Voltar</a>
</div>
</head>
</body>
</html>