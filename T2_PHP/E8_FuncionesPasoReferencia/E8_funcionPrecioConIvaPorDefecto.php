<?php
    function precioConIvaPorDefecto(&$precio, $iva=21){
        echo "El precio INICIAL sin IVA es: <b>" . $precio . "€</b><br>";
        $precio+= $precio * ($iva / 100);
    }
    echo "<b>Programa Principal</b><br>";
    echo "Invocamos a la función.<br><br>";
    $precio = 100;
    precioConIvaPorDefecto($precio);
    echo "El precio con IVA es: <b>" . $precio . "€</b>";
?>