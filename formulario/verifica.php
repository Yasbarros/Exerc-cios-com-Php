<?
include 'funcoes.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $campoNumerico = $_POST["campoNumerico"];
        $campoVazio = $_POST["campoVazio"];
        $campoEmail = $_POST["campoEmail"];
    
        $resultadoVazio = validarCampo($campoVazio, 'qualquer');
        $resultadoEmail = validarCampo($campoEmail, 'email');

        $resultadocpf = validaCPF($campoNumerico);

    
        
        echo $resultadocpf . "<br>";
        echo $resultadoVazio . "<br>";
        echo $resultadoEmail . "<br>";
    }
    ?>

    <form method="post" action="funcoes.php">
        <fieldset class="formulario" style="width: 400px; margin: auto;" >
        <legend>Dados Pessoais</legend>  
        <br>
        <label for="nome">Nome completo: </label>
        <br>
        <input id="campoVazio" name="campoVazio" type="text">

        <br>
        <label for="email">Email: </label>
        <br>
        <input type="text" id="campoEmail" name="campoEmail">
        <br>
        
        <label for="nascimento">Data de nascimento: </label>
        <br>
        <input type="date" name="data" id="data">
        <br>
        <label for="cpf">CPF: </label><br>
        <input id="campoNumerico" name="campoNumerico" type="text" name="cpf" id="cpf">
        <br>
        <label for="tel">Telefone: </label>
        <br>
        <input id="campoNumerico" name="campoNumerico" type="text">
        <br>
        <label for="">CEP:</label>  <br>
        <input id="campoNumerico" name="campoNumerico" type="text">
        <br>
        <label for="end">Endereço: </label> <br>
        <input type="text" id="campoVazio" name="campoVazio">
        <br>

        <label for="login">Login</label>
        <br>
        <input type="text" id="campoVazio" name="campoVazio">
        <br>
        <label for="senha" >Senha: </label>
        <br>
        <input type="password" id="campoVazio" name="campoVazio">
        <br>
        
        <label for="Confsenha">Confirma senha: </label>
        <br>
        <input id="campoVazio" name="campoVazio" type="password">
        <br>

        <input type="submit" value="Enviar">
        <br>
        <br>

    </fieldset>

    </form>
    
    
</body>
</html>