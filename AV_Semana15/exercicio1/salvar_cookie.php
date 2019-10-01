<?php
    $cookie_nome = "carrinho";
    $cookie_valor = "TV";
    setcookie($cookie_nome, $cookie_valor, time() + 300, "/");
    header("Location: sistema.php");
?>