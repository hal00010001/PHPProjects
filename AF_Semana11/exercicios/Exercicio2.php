<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<link rel="stylesheet" href="../resources/css/index.css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Exercicio2</title>
</head>
    <body>
    <div id="divBody">
    	<div id="divContent">
    	<!-- Crie  um  programa  em  PHP que  sorteie  um  número  aleatório  entre  100 e  120  e  outro 
        entre  120  e  150,  bem  como  mostre  todos  os  valores  entre  o  primeiro  e  o  segundo 
        número sorteado. -->
    		<?php
                $num1 = rand(100, 120);
                $num2 = rand(120, 150);
                for ($i = $num1; $i <= $num2; $i++){
                    echo ("O n&uacute;mero &eacute;: $i</br>");
                }
           ?>
    	</div>
    </div>    
    </body>    
</html>