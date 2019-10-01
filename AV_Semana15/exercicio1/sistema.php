<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../resources/css/index.css">
    <meta charset="UTF-8">
    <title>AV_Semana15</title>
</head>
    <body>
    	<div id="divBody">
        	<?php
        	$cookie_nome = "carrinho";
        	if (!isset($_COOKIE[$cookie_nome])){
        	    echo "Cookie com o nome '".$cookie_nome."' nao foi gravado!!!";    	    
        	}
        	else {
        	    echo "Cookie foi gravado com o nome '".$cookie_nome."' e com o valor ".$_COOKIE[$cookie_nome];
        	}
        	?>    	
        	<form action="apagar_cookie.php" method="POST">
            	<input type="submit" value="Sair do Sistema" />
            </form>
    	</div>
    </body>
</html>