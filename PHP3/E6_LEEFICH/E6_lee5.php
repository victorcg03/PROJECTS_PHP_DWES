<?php
    $nombreArchivo = "E6_mensajes5_br.txt";
    echo "<b>Lectura con readfile</b><br><br>";

    //Controlo que el fichero exista
    if (!file_exists($nombreArchivo)) {
        echo "El archivo no existe, no se continuará.";
    } else{
        echo "Las peticiones contenidas en " . $nombreArchivo . " hasta la fecha " . date('d/m/Y') . " son: <br><br>";
        readfile($nombreArchivo);
    }
?>