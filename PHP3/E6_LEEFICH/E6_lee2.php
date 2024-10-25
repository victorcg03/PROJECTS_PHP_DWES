<?php
    $archivoAbrir = "./E6_mensajes2.txt";
    $tamanoArchivo = @filesize($archivoAbrir);
    $archivoAbierto = @fopen($archivoAbrir, 'r');
    if (!$archivoAbierto) {
        echo "El archivo no existe";
    }else{
        if ($tamanoArchivo > 0) {
            echo "El archivo tiene datos y son los siguientes:<br><br>";
            echo fread($archivoAbierto, $tamanoArchivo);
        } else{
            echo "El archivo no tiene datos.";
        }
        fclose($archivoAbierto);
    }
?>