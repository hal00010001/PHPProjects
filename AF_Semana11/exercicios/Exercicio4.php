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
    		<!-- Desenvolva  uma  página  PHP  que  calcule  e  mostre  a  média  aritmética  dos  números 
            ímpares compreendidos entre 30 e 90. -->
            <?php
                $soma = 0;
                $counter = 1;
                $media = 0;
                for($i = 30; $i <= 90; $i++){                    
                    if ($i % 2 != 0){
                        $soma += $i;
                        $counter++;
                    }
                }
                $media = $soma / $counter;
                echo ("A m&eacute;dia aritm&eacute;tica dos $counter n&uacute;meros &iacute;mpares entre 30 e 90 &eacute;: $media");
        	?>
    	</div>
    </div>    
    </body>    
</html>