<?php
    session_start();
    $_SESSION['sess_var'] = 'Hola mundo!';
    echo 'El contenido de $_SESSION["sess_var"] es: ' . $_SESSION["sess_var"];
    echo "<br>Veamos cómo se mantiene su valor al enlazar con la siguiente página...<br>";
    echo "Pulsa SIGUIENTE PÁGINA, se ejecutará page2...<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./E11_page2.php">Siguiente página</a>
</body>
</html>