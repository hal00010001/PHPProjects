<!DOCTYPE>
<html>
<head>
	<link rel="stylesheet" href="../resources/css/index.css">
	<meta charset="UTF-8">
	<title>AV_Semana15</title>
</head>
    <body>   
        <div id="divBody">    	    
	    	<?php
                $caminho = "../Arquivos/";
                $diretorio = dir($caminho);                
                echo "Lista de todos os arquivos do diret&oacute;rio: '<strong>".$caminho."</strong>' em ordem alfab&eacute;tica.";
                while ($files[] = $diretorio -> read()){
                    sort($files);
                }                
                foreach($files as $filename){
                    echo "<a href='".$caminho.$filename."'>".$filename."</a><br/>";
                }
                $diretorio -> close();
            ?>
        </div>    
    </body>    
</html>