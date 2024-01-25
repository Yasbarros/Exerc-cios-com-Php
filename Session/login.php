<?php
session_start();


if (isset($_SESSION['usuario'])) {
    header("Location: verifica.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario_correto = 'Yasmim'; 
    $senha_correta = '12345678'; 

    $usuario_digitado = $_POST['usuario'];
    $senha_digitada = $_POST['senha'];

    if ($usuario_digitado === $usuario_correto && $senha_digitada === $senha_correta) {
        $_SESSION['usuario'] = $usuario_correto;
        header("Location: verifica.php");
        exit();
    } else {
        $erro = "Usuário ou senha incorretos.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        fieldset{
            width: 15%;
            margin: auto;
        }
    </style>
</head>
<body>
    

    <?php if (isset($erro)): ?>
        <p style="color: red;"><?php echo $erro; ?></p>
    <?php endif; ?>

    <form action="login.php" method="post">
        <fieldset>
            <legend><h2>Login</h2></legend>
            <label for="usuario">Usuário:</label>
        <br>
        <input type="text" id="usuario" name="usuario" required>
        <br>

        <label for="senha">Senha:</label>
        <br>
        <input type="password" id="senha" name="senha" required>
        <br><br>
        <input type="submit" value="Login">
        </fieldset>

        
    </form>
</body>
</html>