<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $vectorNumeros = range(10, 100, 10);
    ?>
    <h1>Vector declarado con range:</h1>
    <ul>
        <?php
            for ($i=0; $i < count($vectorNumeros); $i++) { 
                echo "<li>Elemento " . $i . " vale: " . $vectorNumeros[$i] . "</li>";
            }
        ?>
    </ul>
</body>
</html>