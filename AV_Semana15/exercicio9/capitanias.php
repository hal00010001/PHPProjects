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
        	    	  $capitanias = array('Capitania do Maranh&atilde;o', 'Capitania do Cear&aacute;', 
        	    	      'Capitania do Rio Grande', 'Capitania de Itamarac&aacute;', 'Capitania de Pernambuco',
        	    	      'Capitania da Ba&iacute;a de Todos os Santos', 'Capitania de Ilh&eacute;us',
        	    	      'Capitania de Porto Seguro', 'Capitania do Esp&iacute;rito Santo', 
        	    	      'Capitania de S&atilde;o Tom&eacute;', 'Capitania de S&atilde;o Vicente',
        	    	      'Capitania de Santo Amaro', 'Capitania de Santana');                                          
                     
                      function showTable($matriz){
                          echo "<table><thead><tr><th>Nomes das Capitanias Herdit&aacute;rias</th></tr></thead><tbody>";
                          sort($matriz);
                          foreach($matriz as $item){
                              echo "<tr><td>".$item."</td></tr>";
                          }
                      }                          
                      echo "</tbody></table>";                      
                      showTable($capitanias);
                    ?>                    
                </pre>
                <form action="capitanias.php" method="POST">
                	<input type="submit" value="&uarr;" />
                </form>
                <form action="capitaniasRev.php" method="POST">
                	<input type="submit" value="&darr;" />
                </form>
            </div>
        </div>    
    </body>    
</html>