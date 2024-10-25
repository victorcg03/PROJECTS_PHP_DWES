<?php
    $archivoAbrir = "E6_mensajes3.txt";
    if (!file_exists($archivoAbrir)) {
        echo "El archivo no existe";
    }else{
        echo "El contenido del fichero <b>" . $archivoAbrir . "</b> es: <br>";
        readfile($archivoAbrir);
        echo "<br><br>";
        echo "El tamaño es:<br><b>". filesize($archivoAbrir) . "</b> caracteres";
    }
?>