<?php
    $directorio = "doc/";
    $directorioAbierto = @opendir($directorio);
    if (!$directorioAbierto) {
        echo "No se ha podido abrir " . $directorio;
    } else {
        $lineaDirectorio = readdir($directorioAbierto);
        while ($lineaDirectorio) {
            if (!is_dir($lineaDirectorio)) {
                $nombreArchivo = explode(".", basename($lineaDirectorio));
                $extension = $nombreArchivo[count($nombreArchivo)-1];
                if(strtolower($extension) == "pdf" || strtolower($extension) == "ps"){
                    echo $lineaDirectorio . " - Tamaño: " . filesize("doc/".$lineaDirectorio);
                    echo "<br>";
                }
            }
            $lineaDirectorio = readdir($directorioAbierto);
        }
        closedir($directorioAbierto);
    }
?>