<?php
    $personas[0][0] = "Victor";
    $personas[0][1] = "Corral";
    $personas[1][0] = "Juan";
    $personas[1][1] = "Perez";
    $personas[2][0] = "Pablo";
    $personas[2][1] = "Gonzalez";
    $personas[3][0] = "Marcos";
    $personas[3][1] = "Robles";
    $personas[4][0] = "Luciano";
    $personas[4][1] = "Martinez";
    echo ("<h1>Vector asociativo con FOREACH:</h1>");
    foreach ($personas as $persona) {
        echo ("<b>" . $persona[0] . ">>>>" . $persona[1]) . "</b><br>";
    }
?>