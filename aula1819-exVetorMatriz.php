<html lang="pt-br">
<head>
	<title>Testando PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
<div>
	<h1>Exercicios Vetores e Matrizes - Aula 18 e 19</h1>
	<h2>Vetor</h2>  
    <pre> 
	<?php
      $n=array(3,5,8,2);
      print_r($n);
	?>
</pre>
================================
    <h2>Range</h2> 
    <pre>
    	<?php
    	  $c=range(5,20,5);
    	  print_r($c)
    	  ?>
    </pre>
===============================
    <h2>Foreach</h2> 
    <pre>
	<?php
	  $c=range(5,20,5);
	  foreach ($c as $v) {
	  	echo "<td>$v";
	  }
	  ?>
	</pre>
===============================
    <h2>Chave personalizada</h2> 
    <pre>
    	<?php
    	  $v=array(0=>5,1=>9,2=>8,3=>7);
    	  print_r($v);
    	?>
    </pre>
===============================
    <h2>Matrizes</h2>
    <pre>
    <?php
      $m=array(array(6,4),array(4,9),array(3,2));
      $m[0][1]=$m[2][0];
      print_r($m)
  ?>
    </pre> 
===============================
    <h2>Funcao count</h2> 
    <pre>
    <?php
      $v=array("A","J","M","X","K");
      $tot=count($v);
      echo "O vetor tem $tot elementos <br/>";
      print_r($v);
      ?>
    </pre>
</pre>    
</div>
</head>
</body>
</html>