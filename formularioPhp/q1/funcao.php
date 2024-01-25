<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    $media = ($nota1 + $nota2 + $nota3) / 3;

    $status = ($media >= 6) ? "Aprovado" : "Reprovado";

    
    echo "<h2>Resultados</h2>";
    echo "<p><strong>Nome do Aluno:</strong> $nome</p>";
    echo "<p><strong>Média:</strong> $media</p>";
    echo "<p><strong>Status:</strong> $status</p>";
} else {

    header("Location: q1.php");
    exit();
}



?>