<?php
    $nome = $_GET['nome'];
    $cidade = $_GET['cid'];

    setcookie('nome', $nome, time() + 3600);
    setcookie('cidade', $cidade, time() + 3600);

    header("Location: mensagem.php");
    exit();

?>