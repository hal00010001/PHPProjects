<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<link rel="stylesheet" href="../resources/css/index.css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>AF_Semana 11</title>
</head>
    <body>
    	<div id="divBody">
    		<div id="divContent">    	
    		<!-- Desenvolva um programa em PHP que sorteie um número aleatório entre 71 e 100 e 
            exiba  os  números  entre  aquele  sorteado  e  o  triplo  do  seu  valor  ou  até  encontrar  um 
            múltiplo de 11. -->
            <?php
            $num = rand(71, 100);
            $numTemp = $num;
            while($numTemp % 11 !== 0 || $numTemp < $num * 3){
                echo "O n&uacute;mero &eacute;: $numTemp</br>";
                $numTemp++;
            }
            ?>
            </div>           
    	</div>
    	</body>
    	</html>
