<?php
    session_start();
    echo 'Intentamos acceder al contenido de la variable $_SESSION:...<br>';
    echo 'El contenido de $_SESSION["sess_var"] es: ' . $_SESSION["sess_var"];
    echo '<br>Ahora aplicamos unset($_SESSION["sess_var"])<br>';
    unset($_SESSION["sess_var"]);
    echo "por lo que se pierde el valor de la variable...<br>";
    echo "Pulsa SIGUIENTE PÁGINA, se ejecutará page3...<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./E11_page3.php">Siguiente página</a>
</body>
</html>