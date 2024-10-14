<?php
    if (!empty($_GET['euros']) && $_GET['euros'] >= 0) {
        echo "Usted indicó la siguiente información: <br>";
        echo 'Cantidad = '. $_GET['euros'] . " Euros<br>";
        echo "Resultado de la conversión = " . $_GET['euros'] * 1.09 . " US Dollars";
    } else if (empty($_GET['euros'])){
        echo "<h2>Error: No hay valor<h2>";
    } else {
        echo "<h2>Opps...</h2>";
        echo "<h3>Error: " . $_GET["euros"] . " es Valor negativo</h3>";
    }
?>