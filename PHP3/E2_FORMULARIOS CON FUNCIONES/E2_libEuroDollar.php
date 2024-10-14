<?php
    const valorEuro = 1.09;
    function conv_USDtoEu($cantUSD){
        return $cantUSD / valorEuro;
    }
    
    function conv_EuToUsd($cantEuro){
        return $cantEuro * valorEuro;
    }
    function visualiza ($cant, $moneda){
        echo "Usted indicó la siguiente información: <br>";
        echo 'Cantidad = '. $cant . " $moneda <br>";
    }
    function error_vacio(){
        echo "<h2>Error: No hay valor<h2>";
    }
    function error_negativo(){
        echo "<h2>Opps...</h2>";
        echo "<h3>Error: " . $_GET["entrada"] . " es Valor negativo</h3>";
    }
?>