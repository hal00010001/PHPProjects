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
    	    	<?php
                    $caminho = "../Arquivos/";
                    $diretorio = dir($caminho);
                    foreach (new DirectoryIterator($caminho) as $fileInfo){
                        if ($fileInfo -> isDot()) continue;
                        $matrizCaminho[] = ["bytes" => $fileInfo -> getSize(), "file_name" => $fileInfo -> getFileName(), "file_extension" => $fileInfo -> getType(), "file_modification" => $fileInfo -> getMTime()];
                    }
                    array_multisort($matrizCaminho, SORT_ASC);
                    echo "<pre>";
                    // Nao consegui retornar os valores com foreach, talvez porque eu estou usando PHP 7.2
                    print_r($matrizCaminho);
                    echo "<pre>";
                    $diretorio -> close();
                ?>
            </div>
        </div>    
    </body>    
</html>