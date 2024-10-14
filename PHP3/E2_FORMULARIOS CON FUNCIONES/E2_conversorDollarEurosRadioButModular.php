<?php
    include("./E2_libEuroDollar.php");
    if (!empty($_GET['entrada']) && $_GET['entrada'] >= 0) {
        if ($_GET['direccion'] == 'euro') {
            visualiza($_GET['entrada'], "Euros");
            echo "Resultado de la conversión = " . conv_EuToUsd($_GET['entrada']) . " US Dollars";
        } else {
            visualiza($_GET['entrada'], "US Dollars");
            echo "Resultado de la conversión = " . conv_USDtoEu($_GET['entrada']) . " Euros";
        }
    } else if (empty($_GET['entrada'])){
        error_vacio();
    } else {
        error_negativo();
    }
?>