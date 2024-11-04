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
            } else if($_FILES['archivo']['size'] < 102400){
                if (move_uploaded_file($nombreTemp, $directorioFinal . $nombreFinal)) {
                    echo "Fichero válido. Carga realizada con éxito!";
                }else{
                    echo "<b>No se ha podido subir el archivo :( </b>";
                }
            }else{
                echo "El fichero excede el limite de 100Kb!<br>";
                echo "No podemos realizar la operación de subida<br>";
                echo "El archivo tiene un tamaño de " . $_FILES["archivo"]["size"] . " bytes";
            }
        
        }
    }
?>