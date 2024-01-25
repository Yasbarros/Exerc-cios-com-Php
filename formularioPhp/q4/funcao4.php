<?php

function imprimeNumero($x, $y){
    echo "<h3>Números entre $x e $y:</h3>";
        
    $x = (int)$x;
    $y = (int)$y;

    for ($i = $x; $i <= $y; $i++) {
        echo $i . " ";
    }
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["x"]) && isset($_POST["y"])){
        $x = $_POST["x"];
        $y = $_POST["y"];
        if (is_numeric($x) && is_numeric($y)) {
            imprimeNumero($x,$y);
        } else {
            echo "<p>Por favor, insira números válidos.</p>";
        }
        
    }
    else{
        return '<p>Por favor preencher os campos dos formularios.</p>';
    }
}else{
    header("Location: q4.php");
    exit();
}

?>
