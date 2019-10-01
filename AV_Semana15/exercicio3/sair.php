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
                $horaInicio = $_POST["hora_inicial"];
                date_default_timezone_set('America/Sao_Paulo');
                $horaFim = date('H:i:s');                
                function calcularHora($horaInicial, $horaTermino){
                    $horaI = explode(":", $horaInicial);
                    $horaT = explode(":", $horaTermino);
                    $matrizInicial = ($horaI[0] * 3600)+($horaI[1] * 60)+($horaI[2]);
                    $matrizTermino = ($horaT[0] * 3600)+($horaT[1] * 60)+($horaT[2]);
                    $horaDiferenca = $matrizTermino - $matrizInicial;
                    $horaDif = floor($horaDiferenca / 3600);
                    $horaDiferenca = $horaDiferenca - ($horaDif * 3600);
                    $minDif = floor($horaDiferenca / 60);
                    $horaDiferenca = $horaDiferenca - ($minDif * 60);
                    $segDif = $horaDiferenca;
                    $resultadoDif = $horaDif.":".$minDif.":".$segDif;
                    return $resultadoDif;
                }
                echo "Obrigado por utilizar os nossos servi&ccedil;os, voc&ecirc; permaneceu logado por ".calcularHora($horaInicio, $horaFim);                
            ?>                   
        </div>    
    </body>    
</html>