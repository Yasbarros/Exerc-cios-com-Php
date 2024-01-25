<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco</title>
    <style>
        fieldset{
            margin: auto;
            width: 50px;
        }
        
        
    </style>
</head>
<body>
    <form action="envio.php" method="post">
        <fieldset>
            <legend><h2>Enviar Email</h2></legend>
            <div>
            <input type="text" name="nome" id ="nome" placeholder="Nome">
            </div>
            <br>
            <div>
                <input type="email" name="email"  id ="email" placeholder="Email">
            </div>
            <br>
            <div>
                <textarea name="msg" id="msg"></textarea>
            </div>
            <br>
            <input type="submit" name="enviar">
            </fieldset>
    </form>
</body>
</html>