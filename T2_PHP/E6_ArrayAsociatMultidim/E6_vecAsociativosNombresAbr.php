<?php
    $personas = array(
                        "Victor" => "Corral",
                        "Berti" => "Vasile",
                        "Donovan" => "Ramirez",
                        "Paco" => "Gonzalez",
                        "Marcos" => "Perez");
    echo ("<h1>Vector asociativo con FOREACH:</h1>");
    foreach ($personas as $persona => $nombre) {
        echo ("<b>" . $persona . ">>>>" . $nombre) . "</b><br>";
    }
?>