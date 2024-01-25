<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["numeros"])){
        $numeros = $_POST["numeros"];

        $numerosSep = explode(',', str_replace(' ', '', $numeros));
        
        $numerosSep = array_filter($numerosSep);

        if (!empty($numerosSep)) {
            
            $numerosSep = array_map('intval', $numerosSep);
            $media = array_sum($numerosSep) / count($numerosSep);

            echo "<p>Números: " . implode(', ', $numerosSep) . "</p>";
            echo "<p>Média: $media</p>";
        } else {
            echo "<p>Por favor, insira números válidos.</p>";
        }

    }else{
        echo "<p>Invalido</p>";
    }
}else{
    header ("Location: q6.php");
    exit();
}

?>