<html lang="pt-br">
<head>
	<title>Testando PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
<div>
	<?php 
	 for ($i=1; $i<=10 ; $i++) { 
	 	echo "$i";
	 }
	 echo "<br/>";
	 for ($i=0; $i<=50 ; $i+=5) { 
	 	echo "$i";
	 }
	 echo "<br/>";
	 for ($i=20; $i >=0 ; $i-=2) { 
	 	echo "$i";
	 }
	?>

	
    
</div>
</head>
</body>
</html>