<?php
    $archivoAbrir = "./E6_mensajes1.txt";
    if (file_exists($archivoAbrir)) {
        readfile($archivoAbrir);
    }else{
        echo "El archivo no existe";
    }
?>