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
    	    	        $cidades["PR"][] = "Curitiba";
        	    	    $cidades["PR"][] = "Londrina";
        	    	    $cidades["PR"][] = "Pinhais";
        	    	    $cidades["SC"][] = "Florian&oacute;polis";
        	    	            	    	    
        	    	    $estado = $_GET["estado"];
        	    	    
        	    	    // Nao consegui fazer o foreach, nao sei se a minha estrutura esta errada
        	    	    // ou se e por causa da versao do PHP (7.2)
        	    	    /*
        	    	    foreach($cidades as $indice => $valor){
        	    	        print $indice;
        	    	        print '-';
        	    	        print $valor;
        	    	        print '<br/>';
        	    	    }*/
        	    	            	    	    
        	    	    if($cidades[$estado] != ""){        	    	              	    	        
        	    	        print_r($cidades[$estado]);
        	    	    }
        	    	    elseif($estado == null){
        	    	        print_r($cidades);
        	    	    }
        	    	    else {
        	    	        echo "N&atilde;o h&aacute; cidades desse estado.";
        	    	    }
                    ?>                    
                </pre>                
            </div>
        </div>    
    </body>    
</html>