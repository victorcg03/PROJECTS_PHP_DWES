<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Únicamente socios</h1>
    <?php
    if(isset($_SESSION["userID"])){ ?>
        <p>Estás conectado como <?= $_SESSION["userID"] ?></p>
        <p>Aquí iría el contenido de Socios Privados</p>
    <?php } else { ?>
        <p>No estás conectado!</p>
        <p>Sólo los socios pueden ver esta página</p>
    <?php } ?>
    <a href="./E11_login_valida.php">Volver a página Principal</a>
</body>
</html>