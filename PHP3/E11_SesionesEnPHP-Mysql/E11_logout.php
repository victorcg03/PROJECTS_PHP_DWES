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
    <h1>Desconeción (Log out)</h1>
    <?php
    if(isset($_SESSION["userID"])){ ?>
        <p>Desconectado (Logged out).</p>
        <?php session_destroy() ?>
    <?php } else { ?>
        <p>No estabas conectado, por ello no has sido expulsado.</p>
    <?php } ?>
    <a href="./E11_login_valida.php">Volver a página Principal</a>
</body>
</html>