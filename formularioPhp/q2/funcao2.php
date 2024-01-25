<?php

function verificarIdade($idade) {
    if (is_numeric($idade)) {
        $status = ($idade >= 18) ? "Maior de Idade" : "Menor de Idade";
        return "<p>A pessoa tem $idade anos e é $status.</p>";
    } else {
        return "<p>O campo de idade deve ser um número.</p>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["idade"])) {
        $idade = $_POST["idade"];
        echo "<h2>Resultado</h2>";
        echo verificarIdade($idade);
    } else {
        echo "<p>O campo de idade não foi preenchido.</p>";
    }
} else {
    header("Location: q2.php");
    exit();
}


?>