<?php
    $nombreArchivo = "E6_mensajes7.txt";
    echo "<b>Utiliza fgetc()</b><br><br>";

    //Controlo que el fichero exista
    if (!file_exists($nombreArchivo)) {
        echo "El archivo no existe, no se continuará.";
    } else{
        echo "Contenido del fichero <b>" . $nombreArchivo . "</b> hasta fecha " . date('d/m/Y') . ": <br><br>";
        $archivoAbierto = @fopen($nombreArchivo, 'r');
        if (!$archivoAbierto) {
            echo "El archivo no se ha podido abrir, no se seguirá ejecutando...";
        } else {
            $salida = "";
            while (!feof($archivoAbierto)) {
                $caracter = fgetc($archivoAbierto);
                if ($caracter == "\n") {
                    $salida .= "<br>";
                } else{
                    $salida .= $caracter;
                }
            }
            echo $salida;
            fclose($archivoAbierto);
        }
    }
?>