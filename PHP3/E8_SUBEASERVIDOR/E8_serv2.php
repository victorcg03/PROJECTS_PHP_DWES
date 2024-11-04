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
            } else if (move_uploaded_file($nombreTemp, $directorioFinal . $nombreFinal)) {
                echo "Nombre y ruta completa del archivo: $directorioFinal . $nombreFinal<br>";
                echo "Si existe el directorio $directorioFinal<br>";
                echo "Nombre de Fichero: $nombreFinal valido.<br>";
                echo "Carga realizada con éxito!<br>";
            }else{
                echo "<b>No se ha podido subir el archivo :( </b>";
            }
        
        }
    }
?>