<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<link rel="stylesheet" href="../resources/css/index.css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
    <body>
    <div id="divBody">
    	<div id="divContent">
    		<?php
    		// Desenvolva uma página PHP que sorteie um número aleatório entre 1 e 20 e exiba os números  entre  aquele  sorteado  e  o  dobro  do  seu  valor.  Exemplo:  sendo  o  número sorteado 2, deve imprimir 2, 3 e 4 (o dobro de 2 é 4).
    		$num = rand(1, 20);
    		echo("O número sorteado foi $num<br/><br/>");
    		for ($i = $num; $i <= $num * 2; $i++){
    		    echo ("Número: $i<br/>");
    		}
           ?>
    	</div>
    </div>
    </body>    
</html>