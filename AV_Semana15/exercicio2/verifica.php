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
            $login = $_POST["login"];
            $senha = $_POST["senha"];
            
            if ($login === "aluno" and $senha === "Aluno"){
                header("Location: aluno.html");
            }
            elseif ($login === "professor" and $senha === "Professor"){
                header("Location: professor.html");
            }
            else {
                echo "Usu&aacute;rio ou senha incorretos";
            }
        ?>
        </div>
    </body>
</html>