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
    		// Crie uma página PHP que exiba os números pares entre 45 e 560.
    		for ($i = 45; $i <= 560; $i++){
    		    if ($i % 2 == 0){
    		        echo ("Número par: $i<br/>");
    		    }    		    
    		}
           ?>
    	</div>
    </div>
    </body>    
</html>