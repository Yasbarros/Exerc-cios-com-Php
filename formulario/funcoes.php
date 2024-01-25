<?php

    function validarCampo($campo, $tipo) {
      
        if (empty($campo)) {
            return "O campo não foi informado.";
        }
    
       
        if (trim($campo) === "") {
            return "O campo não pode ser vazio.";
        }
    
     
        if ($tipo === 'numerico' && !ctype_digit($campo)) {
            return "O campo deve conter apenas números.";
        }
    
      
        if ($tipo === 'email' && !filter_var($campo, FILTER_VALIDATE_EMAIL)) {
            return "O campo não é um email válido.";
        }
    
       
        return true;
    }


    function validaCPF($cpf) {
 
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
         
        if (strlen($cpf) != 11) {
            return false;
            echo "Invalido";
        }
    
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
            echo "Invalido";
        }
    
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                echo "Invalido";
                return false;
            }
        }
        return true;
        echo "CPF valido!";
    
    }
    


?>