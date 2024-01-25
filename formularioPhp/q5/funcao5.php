<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["nome"]) && isset($_POST["data"])){
        $nome = $_POST["nome"];
        $ano = $_POST["data"];
        $idade = 2023 - $ano;

        echo "Nome: $nome";
        echo "Idade: $idade";
    }else {
        echo "<p>Invalido</p>";
    }
}else{
    header ("Location: q5.php");
    exit();
}

?>