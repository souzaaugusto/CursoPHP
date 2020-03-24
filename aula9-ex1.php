<html lang="pt-br">
<head>
	<title>Testando PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
<div>
	<?php
	  $a = isset($_GET["ano"])?$_GET["ano"]:1900;
	  $i = date("Y")-$a;
	  echo "voce nasceu em $a e tera $i <br/>";
	  if($i >=18){
	  	$v="ja pode votar";
	  	$d="ja pode dirigir";
	  }
	  else {
	  	$v="nao pode votar";
	  	$d="nao pode dirigir";
	  }
	  echo "Com essa idade voce $v e tambem $d";
	
    ?>
</div>
</head>
</body>
</html>