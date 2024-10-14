<?php
    if (!empty($_GET['entrada']) && $_GET['entrada'] >= 0) {
        if ($_GET['direccion'] == 'euro') {
            echo "Usted indicó la siguiente información: <br>";
            echo 'Cantidad = '. $_GET['entrada'] . " Euros<br>";
            echo "Resultado de la conversión = " . $_GET['entrada'] * 1.09 . " US Dollars";
        } else {
            echo "Usted indicó la siguiente información: <br>";
            echo 'Cantidad = '. $_GET['entrada'] . " US Dollars<br>";
            echo "Resultado de la conversión = " . $_GET['entrada'] / 1.09 . " Euros";
        }
    } else if (empty($_GET['entrada'])){
        echo "<h2>Error: No hay valor<h2>";
    } else {
        echo "<h2>Opps...</h2>";
        echo "<h3>Error: " . $_GET["entrada"] . " es Valor negativo</h3>";
    }
?>