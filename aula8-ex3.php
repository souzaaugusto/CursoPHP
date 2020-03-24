<html lang="pt-br">
<head>
	<title>Testando PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<? php
	  $txt = isset($_GET["T"])?$_GET["T"]:"Texto Generico";
	  $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
	  $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
	?>
</head>
<style>
	span.texto{
		font-size: <?php echo $tam;?>;
		color: <?php echo $cor;?>;
	}
</style>
<div>
	<h1>Exercicio 3 - Aula 8</h1>
	<?php
	  echo "<span class='texto'>$txt</span>";
	?>
</div>
<body>

</body>
</html>