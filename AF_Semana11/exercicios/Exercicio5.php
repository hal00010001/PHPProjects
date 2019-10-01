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
    	   <!-- Crie  uma  página  PHP
            que  imprima  a  sequência  Ping-Pong  dos  números  no  intervalo 
            entre  31  e  78.  Essa  sequência  é  dada  da  seguinte  forma:  se  o  número  é  ímpar, 
            imprime “Ping”; se é par, imprime “Pong”. -->
    		<?php
    		for ($i = 31; $i <= 78; $i++){
    		    if($i % 2 == 0){
    		        echo("Pong</br>");
    		    }
    		    else {
    		        echo("Ping</br>");
    		    }
    		}
	       ?>
    	</div>
    </div>    
    </body>    
</html>