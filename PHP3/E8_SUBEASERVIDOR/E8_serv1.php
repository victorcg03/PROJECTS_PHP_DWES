<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_FILES['archivo']['tmp_name'] == 'none' || $_FILES['archivo']['size'] == 0) {
            echo "<b>Error en la carga del archivo</b><br>";
        }else{
            $directorioFinal = "../../uploads/";
            $nombreFinal = "up_" . $_FILES['archivo']['name'];
            $nombreTemp = $_FILES['archivo']['tmp_name'];
            if (!@opendir($directorioFinal)) {
                mkdir($directorioFinal);
            }
            if (move_uploaded_file($nombreTemp, $directorioFinal . $nombreFinal)) {
                echo "Subida realizada con éxito!<br>";
                echo "Nombre temporal:  $nombreTemp";
                echo "<br>nombre final: $nombreFinal";
            }else{
                echo "<b>No se ha podido subir el archivo :( </b>";
            }
        }
    }
?>