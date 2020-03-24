<html lang="pt-br">
<head>
	<title>Testando PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
<div>
	<h1>Exercicio 1 - Aula 10</h1>
	<? php
	   $d=isset($_GET["ds"])?$_GET["ds"]:0;
	   switch ($d) {
	   	case 2:
	   	case 3:
	   	case 4:
	   	case 5:
	   	case 6:
	   	  echo "Levanta e vai estudar";
	   		break;
	   	case 7:
	   	case 8:
	   	  echo "Descanse, pequeno ganhoto";
	   	  break;
	   default:
	      echo "Dia da semana invalido";
	     }
	?>

    <a href="ex2-aula10.html">Voltar</a>
</div>
</head>
</body>
</html>