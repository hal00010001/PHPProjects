<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<link rel="stylesheet" href="../resources/css/index.css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Exercicio 1</title>
</head>
<body>
	<div id="divBody">
		<div id="divContent">
			
                <?php
                // Crie uma função que receba um número inteiro e retorne seu fatorial.
                function calcularFatorial(){
                    $valor = $_POST["valor"];
                    $fat = 1;
                    for($i = 1; $i <= $valor; $i++){
                        $fat = $fat * $i;                        
                    }
                    echo "O fatorial de $valor &eacute; $fat";
                }
                                                
                calcularFatorial();
                
                ?> 
			
		</div>
	</div>
</body>
</html>