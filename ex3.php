<DOCTYPE html>
<html>	
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
	<? php
	  $nome = $_GET["nome"];isset($_GET["nome"])?$_GET["nome"]:"[nao informado]";
	  $ano = $_GET["ano"];isset($_GET["ano"])?$_GET["ano"]:0;
	  $sexo = $_GET["sexo"];isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
	  $idade = date("Y")-$ano;
	  echo"$nome e $sexo e tem $idade anos";
	?>

	<br/><br/><a href="ex3.html">Voltar</a>
</div>
</body>
</html>
