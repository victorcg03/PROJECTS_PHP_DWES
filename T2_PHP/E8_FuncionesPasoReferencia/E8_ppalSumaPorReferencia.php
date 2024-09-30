<?php
    function Suma($a, $b, &$resultado){
        $resultado = $a + $b;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Asignamos valores a las dos variables <br>
    <?php
        $a = 10;
        $b = 20;
    ?>
    $a = <?= $a ?><br>
    $b = <?= $b ?><br><br>
    Llamada a la Funcion Suma(a,b,resultado)<br>
    <?php
        $resultado;
        Suma($a,$b,$resultado);
    ?>
    El resultado se obtiene en el parámetro resultado, pasado por referencia <br>
    La suma de <?= $a ?> y <?= $b ?> es <?= $resultado ?>
</body>
</html>