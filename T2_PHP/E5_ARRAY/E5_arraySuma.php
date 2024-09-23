<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numeros = array(1,2,3,4,5,6,7,8,9,10);
    ?>
    <p>Numero de elementos del array: <?=count($numeros)?></p>
    <p>Los elementos del array son:</p>
    <?php
        $suma = 0;
        foreach ($numeros as $numero) {
            echo $numero . "<br>";
            $suma += $numero;
        }
        echo "<b>SUMA="  . $suma . "</b>";
    ?>
</body>
</html>