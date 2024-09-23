<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contenido del vector de cadenas con WHILE-END-PREV:</h1>
    <ul>
        <?php
            $nombres = array("Pablo", "Victor", "Juan", "Andrei", "Donovan", "Berti", "Carlos");
            $elementoActual = end($nombres);
            while ($elementoActual) {
                echo "<li>" . $elementoActual . "</li>";
                $elementoActual = prev($nombres);
            }
        ?>
    </ul>
</body>
</html>