<!DOCTYPE>
<html>
<head>
	<link rel="stylesheet" href="../resources/css/index.css">
	<meta charset="UTF-8">
	<title>AV_Semana15</title>
</head>
    <body>   
        <div id="divBody"> 
        	<div id="divContent">
        		<pre>
        	    	<?php
        	    	  $alunos = array('Joao', 'Jose', 'Maria', 'Ana', 'Almir', 'Mariana', 'Helena');
                      $letra = strtoupper($_GET["letra"]);
                      if ($letra == null){
                          echo "&Eacute; necess&aacute;rio informar a letra<br/>";
                      }
                      // Nao consegui fazer a funcao ser case insensitive
                      $filtered = array_filter($alunos, create_function('$a', 'return $a[0] == "' . $letra . '";'));
                      if ($filtered != null && $filtered != ""){
                          print_r($filtered);
                      }
                      else {
                          echo "N&atilde;o h&aacute; alunos com essa letra";
                      }                          
                    ?>
                </pre>
            </div>
        </div>    
    </body>    
</html>