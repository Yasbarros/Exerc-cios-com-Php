<?php

function calculaImc($peso, $altura){
    $imc = $peso / ($altura*2);
    if($imc < 16){
        echo "Magreza grave";
    }else if($imc < 17){
        echo "Magreza moderada";
    }else if($imc < 18.5){
        echo "Magreza leve";
    }else if($imc < 25){
        echo "Saudavel";
    }else if($imc < 30){
        echo "Obeso";
    }else if($imc < 35){
        echo "Obesidade Grau I";
    }else if($imc < 40){
        echo "Obesidade Grau II(severa)";
    }else{
        echo "Obesidade Grau III (mórbida)";
    }
}


if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["peso"]) && isset($_POST["altura"]) ){
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
        if (is_numeric($peso) && is_numeric($altura) && $peso > 0 && $altura > 0) {
            calculaImc($peso, $altura);
        }else{
            echo "Invalido";
        }
    }else{
        echo "Preencha o formulario";
    }
}else{
    header ("Location: q7.php");
    exit();
}


?>