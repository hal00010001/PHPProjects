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
    		// Desenvolva uma página PHP que sorteie um número aleatório entre 1 e 40 e verifique se é primo.
    		$num = rand(1, 40);
    		$div = 0;
    		for ($i = 1; $i <= $num; $i++){
    		    if ($num % $i == 0){
    		        $div++;
    		    }
    		}    		
    		if ($div > 2){
    		    echo ("O número $num não é primo.");
    		}
    		else {
    		    echo ("O número $num é primo.");
    		}
           ?>
    	</div>
    </div>
    </body>    
</html>