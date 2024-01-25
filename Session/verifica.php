<?php
session_start();


if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo $usuario; ?>!</h2>

    <form action="logout.php" method="post">
        <input type="submit" value="Logout">
    </form>
</body>
</html>