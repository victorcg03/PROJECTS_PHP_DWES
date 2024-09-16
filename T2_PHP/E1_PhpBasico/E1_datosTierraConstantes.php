<?php
    define('radioTierra', 6371);
    define('distanciaTierraSol', 150000000);
    define('PI', 3.14159265359);
    define('lonigutdVueltaEcuador', 2 * PI * radioTierra);

    echo "El radio de la Tierra es: <b>" . radioTierra . " Km </b> <br>";
    echo "La distancia de la Tierra al Sol es: <b>" . distanciaTierraSol . " Km</b> <br>";
    echo "La longitud de una vuelta al Ecuador es: <b>" . lonigutdVueltaEcuador . " Km</b> <br>";
    echo "La longitud equivale a <b>" . distanciaTierraSol / lonigutdVueltaEcuador . " vueltas </b>"
    
?>