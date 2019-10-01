<!DOCTYPE>
<html>
<head>
	<link rel="stylesheet" href="../resources/css/index.css">
	<meta charset="UTF-8">
	<title>AV_Semana15</title>
</head>
    <body>   
        <div id="divBody">
    	    <form action="sair.php" method="post">
    	    	<?php
                    date_default_timezone_set('America/Sao_Paulo');        	   
                    $horas = date('H:i:s');
                    echo "Seja bem vindo usu&aacute;rio, agora são ".$horas;                
                ?>
                <input type="hidden" name="hora_inicial" value="<?=$horas;?>" />
                <br/>
                <input type="submit" value="Sair" />
            </form>	   
        </div>    
    </body>    
</html>