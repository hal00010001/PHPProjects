<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<link rel="stylesheet" href="../resources/css/index.css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Exercicio 2</title>
</head>
<body>
	<div id="divBody">
		<div id="divContent">
			
                <?php
                /* Crie  uma  página  HTML  com  um  formulário  que  envie  um  conjunto  de  números
                separados  por  vírgula  para  uma  página  PHP.  Desenvolva,  então,  uma  página  PHP
                que contenha quatro funções, sendo que cada uma receberá o array com os números informados
                no formulário.  Em seguida,  a  página  PHP  deverá  executar cada  uma  das funções.*/
                function executarFuncoes(){
                    soma();
                    subtracao();
                    multiplicacao();
                    divisao();
                }
                function soma(){
                    $soma = 0;
                    $lista = explode(",", $_POST["valor"]);
                    foreach ($lista as $valor){
                        $soma += $valor;                        
                    }
                    echo "A soma de todos os itens do array &eacute;: $soma <br/><br/>";
                }
                function subtracao(){
                    $subtracao = 0;
                    $lista = explode(",", $_POST["valor"]);
                    foreach ($lista as $valor){
                        $subtracao = $subtracao - $valor;                        
                    }
                    echo "A subtra&ccedil;&atilde;o de todos os itens do array &eacute;: $subtracao <br/><br/>";
                }
                function multiplicacao(){
                    $multiplicacao = 1;
                    $lista = explode(",", $_POST["valor"]);
                    foreach ($lista as $valor){
                        $multiplicacao = $multiplicacao * $valor;                        
                    }
                    echo "A multiplica&ccedil;&atilde;o de todos os itens do array &eacute;: $multiplicacao <br/><br/>";
                }
                function divisao(){
                    $divisao = 1;
                    $lista = explode(",", $_POST["valor"]);
                    foreach ($lista as $valor){
                        $divisao = $divisao / $valor;                        
                    }
                    echo "A divis&atilde;o de todos os itens do array &eacute;: $divisao ";
                }
                executarFuncoes();
                
                ?> 
			
		</div>
	</div>
</body>
</html>