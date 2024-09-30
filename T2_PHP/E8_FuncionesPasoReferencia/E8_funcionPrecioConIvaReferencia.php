<?php
    function precioConIva($iva, &$precio){
        $precio += $precio * ($iva / 100);
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
    <b>Programa Principal</b><br>
    El valor del IVA lo establecemos desde él. <br>
    <?php $iva = 21; ?>
    El valor del IVA es: <?= $iva ?>% <br>
    Invocamos a la función <br><br>
    <?php
        $precio = 100;
    ?>
    El precio INICIAL sin IVA es: <?= $precio ?>€<br>
    <?php
        precioConIva($iva, $precio);
    ?>
    El precio con iva es: <?= $precio ?>€
</body>
</html>