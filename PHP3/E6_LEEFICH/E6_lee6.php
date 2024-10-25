<?php
    $nombreArchivo = "E6_mensajes6.txt";
    echo "<b>Lee Archivo con fgets</b><br><br>";

    //Controlo que el fichero exista
    if (!file_exists($nombreArchivo)) {
        echo "El archivo no existe, no se continuará.";
    } else{
        echo "Contenido del fichero <b>" . $nombreArchivo . "</b> hasta fecha de hoy ( " . date('d/m/Y') . " ): <br><br>";
        $archivoAbierto = @fopen($nombreArchivo, 'r');
        if (!$archivoAbierto) {
            echo "El archivo no se ha podido abrir, no se seguirá ejecutando...";
        } else {
            while (!feof($archivoAbierto)) {
                $linea = fgets($archivoAbierto);
                echo "<b>" . $linea . "</b><br><br>";
            }
            fclose($archivoAbierto);
        }
    }
?>