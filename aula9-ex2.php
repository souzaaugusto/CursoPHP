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
	  if($i<16){
	  	$tipovoto="nao vota";
	  }
	  elseif (($i>=16&&$i<18)||($i>65)) {
	  	$tipovoto="voto opcional";
	  }
	  else {
	  	$tipovoto="obrigatorio";
	  }
	
	  echo "Para essa idade, $tipovoto";
    ?>
</div>
</head>
</body>
</html>