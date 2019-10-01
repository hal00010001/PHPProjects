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
    	<!-- Crie  um  programa  em  PHP  que  sorteie  um  número  aleatório  entre  10  e  30  e  outro 
        entre 30 e 60, bem como mostre o resultado da soma dos elementos que estão entre o 
        primeiro e o segundo número sorteado. -->
    		<?php
                $num1 = rand(10, 30);
                $num2 = rand(30, 60);
                $soma = 0;
                for($i = $num1; $i <= $num2; $i++){
                    $soma += $i;
                }
                echo ("O resultado da soma dos n&uacute;meros entre $num1 e $num2 &eacute; $soma");
	       ?>
    	</div>
    </div>
    </body>    
</html>