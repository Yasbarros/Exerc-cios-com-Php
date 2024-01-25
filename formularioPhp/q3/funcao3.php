<?php

function calcularOperacoes($num1, $num2){
    $soma = $num1 + $num2;
    $sub = $num1 - $num2;
    $mul = $num1 * $num2;
    $div = ($num2 != 0) ? $num1 / $num2 : "Não é possível dividir por zero";


    echo "<h2>Resultados</h2>";
    echo "<p><strong>Soma dos valores: </strong> $soma</p>";
    echo "<p><strong>Subtração dos valores: </strong> $sub</p>";
    echo "<p><strong>Multiplicação dos valores: </strong> $mul</p>";
    echo "<p><strong>Divisão dos valores: </strong> $div</p>";
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (isset($_POST["num1"]) && isset($_POST["num2"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        echo calcularOperacoes($num1, $num2);
    }else{
        return '<p>Por favor preencher os campos dos formularios.</p>';
    }
     
}else{

    header("Location: q3.php");
    exit();
}

?>