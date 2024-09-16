<?php
    define('RUEDAS', 4);
    define('ACEITE', 10);
    define('FRENOS', 100);
    
    $ruedasCompradas = 1;
    $aceiteComprado = 1;
    $frenosComprados = 0;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> E1_compraArticulos</title>
    </head>
    <body>
        <h1>PRECIOS DE LOS ARTÍCULOS</h1>
        <p>PRECIOFRENOS= <?= FRENOS ?></p>
        <p>PRECIOACEITE= <?= ACEITE ?></p>
        <p>PRECIORUEDAS= <?= RUEDAS ?></p>
        <?php
            if($frenosComprados != 0 && $aceiteComprado != 0 && $ruedasCompradas != 0){
                $precioSinIva = $frenosComprados * FRENOS + $aceiteComprado * ACEITE + $ruedasCompradas * RUEDAS;
                echo "<h1>Se han comprado todos los articulos</h1>";
                echo "<p>Su petición es la siguiente:</p>";
                echo "<p>Frenos: " . $frenosComprados;
                echo "<p>Aceite: " . $aceiteComprado;
                echo "<p>Ruedass: " . $ruedasCompradas;         
                echo "<br><br><b>Número de elementos solicitados: " . $frenosComprados + $ruedasCompradas + $aceiteComprado . "</b>";
                echo "<br><b>Subtotal: " . $precioSinIva . " euros </b>";
                echo "<br><b>Total con el IVA: " . $precioSinIva + ($precioSinIva * 0.21) . " euros </b>";
            } else{
                echo "No comprados: " . ($frenosComprados == 0 ? "frenos, " : "") . ($ruedasCompradas == 0 ? "ruedas, " : "") . ($aceiteComprado == 0 ? "aceite" : "");
                echo "<h1>La petición ha de contener todos los tipos de artículo!!</h1>";
            }
        ?>
    </body>
</html>