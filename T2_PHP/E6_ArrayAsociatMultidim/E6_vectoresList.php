<?php
    $personas = array(
                        "Victor" => "Corral",
                        "Berti" => "Vasile",
                        "Donovan" => "Ramirez",
                        "Paco" => "Gonzalez",
                        "Marcos" => "Perez");
    
    echo("<h1>Vectores asociativos</h1>");
    echo("Recorre vector con foreach porque while-list el each esta deprecated: <br>");
    foreach ($personas as $nombre => $apellido) {
        echo ("<b>" . $nombre . ">>>>" . $apellido . "</b><br>");
    }
?>