<?php
    $directorio = "doc/";
    $directorioAbierto = @opendir($directorio);
    if (!$directorioAbierto) {
        echo "No se ha podido abrir " . $directorio;
    } else {
        $lineaDirectorio = readdir($directorioAbierto);
        echo "<table border='1'>";
        echo "<theader>";
        echo "<th>Fichero</th><th>Tamaño</th>";
        while ($lineaDirectorio) {
            if (!is_dir($lineaDirectorio)) {
                $nombreArchivo = explode(".", basename($lineaDirectorio));
                $extension = $nombreArchivo[count($nombreArchivo)-1];
                if(strtolower($extension) == "pdf" || strtolower($extension) == "ps"){
                    echo "<tr>";
                    echo "<td>" . $lineaDirectorio . "</td><td>".filesize("doc/".$lineaDirectorio);
                    echo "</td></tr>";
                }
            }
            $lineaDirectorio = readdir($directorioAbierto);
        }
        closedir($directorioAbierto);
    }
?>