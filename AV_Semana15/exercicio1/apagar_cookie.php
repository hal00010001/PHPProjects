<?php
    $cookie_nome = "carrinho";
    setcookie($cookie_nome, "", time() - 3600);
    header("Location: ../index.html");
?>