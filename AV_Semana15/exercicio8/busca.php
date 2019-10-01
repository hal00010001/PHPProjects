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
        	    	  $matriz = array('palavra', 'senha', 'adivinhar', 'nome', 'segredo', 'web', 'buscar');
                      $palavra = $_POST["palavra"];
                      if ($palavra == null){
                          echo "&Eacute; necess&aacute;rio informar a palavra<br/>";
                      }
                      else {
                          $posicao = array_search($palavra, $matriz);
                          echo "A posi&ccedil;&atilde;o em que a palavra est&aacute; &eacute;: ".$posicao;
                      }
                    ?>
                </pre>
            </div>
        </div>    
    </body>    
</html>