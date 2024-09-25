<?php
    $personas = array(
                        "Victor" => "Corral",
                        "Berti" => "Vasile",
                        "Donovan" => "Ramirez",
                        "Paco" => "Gonzalez",
                        "Marcos" => "Perez");
    
    echo("<h1>Vectores asociativos-foreach()</h1>");
    echo("Visualizamso el vector creado: <br>");
    echo("<ul>");
    foreach ($personas as $nombre => $apellido) {
        echo ("<li>" . $nombre . ">>>>" . $apellido . "</li>");
    }
    echo("</ul>");
?>