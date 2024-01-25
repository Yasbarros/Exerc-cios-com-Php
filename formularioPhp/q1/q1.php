<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Calculadora de Média</h2>
    <form action="funcao.php" method="post">
        <label for="nome">Nome do Aluno:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="nota1">Nota 1:</label>
        <input type="number" id="nota1" name="nota1" required><br>

        <label for="nota2">Nota 2:</label>
        <input type="number" id="nota2" name="nota2" required><br>

        <label for="nota3">Nota 3:</label>
        <input type="number" id="nota3" name="nota3" required><br>

        <button type="submit">Calcular Média</button>
    </form>
</body>
</html>