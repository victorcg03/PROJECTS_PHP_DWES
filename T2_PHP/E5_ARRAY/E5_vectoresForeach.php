<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contenido del vector de cadenas con FOREACH:</h1>
    <ul>
        <?php
            $nombres = array("Pablo", "Victor", "Juan", "Andrei", "Donovan", "Berti", "Carlos");
            foreach ($nombres as $nombre) {
                echo "<li>" . $nombre . "</li>";
            }
        ?>
    </ul>
</body>
</html>