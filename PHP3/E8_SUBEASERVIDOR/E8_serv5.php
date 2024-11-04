<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_FILES['archivo']['tmp_name'] == 'none' || $_FILES['archivo']['size'] == 0) {
            echo "<b>Error en la carga del archivo</b><br>";
        }else{
            $directorioFinal = "./DOC/";
            $nombreFinal = "up_" . $_FILES['archivo']['name'];
            $nombreTemp = $_FILES['archivo']['tmp_name'];
            echo "Vamos a intentar subir el archivo al directorio <b>$directorioFinal</b>.....<br>";
            if (!@opendir($directorioFinal)) {
                echo "No existe el directorio $directorioFinal<br>";
                echo "Lo vamos a crear...<br>";
                if (mkdir($directorioFinal, 0777)) {
                    echo "Directorio creado con éxito!<br>";
                    if (move_uploaded_file($nombreTemp, $directorioFinal . $nombreFinal)) {
                        echo "Fichero válido. Carga realizada con éxito!";
                    }else{
                        echo "<b>No se ha podido subir el archivo :( </b>";
                    }
                }else{
                    echo "Ha habido un error creando el directorio, no se procederá";
                }
            } 
            
        }
    }
?>