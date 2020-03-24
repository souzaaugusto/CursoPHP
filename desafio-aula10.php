<html lang="pt-br">
<head>
	<title>Testando PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
<div>
	<h1>Desafio- Aula 10</h1>
	<?php
	  $e=isset($_GET["est"])?$_GET["est"]:"Escolher o estado";
	  switch($e) {
	  	case SP:
	  	case RJ:
	  	case MG:
	  	case ES:
	  	  echo "O Estado de $e pertence a regiao sudeste";
	  		break;
	    case PR:
	    case SC:
	    case RS:
	      echo "O Estado $e pertence a regiao sul";
	      break;
	     default:
	       echo "escolha invalida";
	  }
	  ?>
	

    <a href="desafio-aula10.html">Voltar</a>
</div>
</head>
</body>
</html>