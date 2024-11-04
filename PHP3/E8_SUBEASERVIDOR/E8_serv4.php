<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_FILES['archivo']['tmp_name'] == 'none' || $_FILES['archivo']['size'] == 0) {
            echo "<b>Error en la carga del archivo</b><br>";
        }else{
            $directorioFinal = "C:/PROJECTS_PHP_DWES/uploads/";
            $nombreFinal = "up_" . $_FILES['archivo']['name'];
            $nombreTemp = $_FILES['archivo']['tmp_name'];
            if (!@opendir($directorioFinal)) {
                echo "Error. No existe el directorio $directorioFinal";
            } else {
                echo "El tipo de fichero escogido es: " . $_FILES['archivo']['type'] . "<br>";
                if($_FILES['archivo']['type'] == "application/pdf" || $_FILES['archivo']['type'] == "application/postscript"){
                    if (move_uploaded_file($nombreTemp, $directorioFinal . $nombreFinal)) {
                        echo "Fichero válido. Carga realizada con éxito!";
                    }else{
                        echo "<b>No se ha podido subir el archivo :( </b>";
                    }
                } else {
                    echo "Solo se pueden subir ficheros pdf y ps";
                }
            }
        }
    }
?>