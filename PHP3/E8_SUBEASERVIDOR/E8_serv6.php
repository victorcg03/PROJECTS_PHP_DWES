<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_FILES['archivo']['tmp_name'] == 'none' || $_FILES['archivo']['size'] == 0 || !isset($_POST['descrip']) || empty($_POST['descrip'])) {
            echo "<b>Error en la carga del archivo o la descripción</b><br>";
        }else{
            $carpetaArchivo = "./DOC/";
            $carpetaDescripcion = "./DSC/";
            $archivoDescripcion = "descripciones.dsc";
            $carpertaCreada = true;
            $nombreTemp = $_FILES['archivo']['tmp_name'];
            $nombreFinal = "up_" . $_FILES['archivo']['name'];
            if (!@opendir($carpetaArchivo)) {
                echo "No existe el directorio $carpetaArchivo<br>";
                echo "Vamos a crearlo...<br>";
                $carpertaCreada = mkdir($carpetaArchivo);
            }
            if (!@opendir($carpetaDescripcion)) {
                echo "No existe el directorio $carpetaDescripcion<br>";
                echo "Vamos a crearlo...<br>";
                $carpertaCreada = mkdir($carpetaDescripcion);
            }
            if (!$carpertaCreada) {
                echo "Ha habido un error creando algun directorio, no se continuará";
            }else{
                if (move_uploaded_file($nombreTemp, $carpetaArchivo . $nombreFinal)) {
                    echo "Fichero válido. Carga realizada con éxito!<br>";
                    echo "Añadiendo descripción introducida al archivo local $carpetaDescripcion.$archivoDescripcion<br>";
                    $ficheroAbierto = fopen($carpetaDescripcion.$archivoDescripcion, 'a+');
                    if (!$ficheroAbierto) {
                        echo "Ha habido un error al abrir el archivo";
                    }else{
                        $fecha = getdate();
                        $fechaHora = $fecha['mday'].'/'.$fecha['mon'].'/'.$fecha['year'] . " (" . $fecha['hours'] . ":" . $fecha['minutes'] . ")";
                        if (fwrite($ficheroAbierto, $fechaHora . "\t" . $_POST['descrip'] . "\n")) {
                            echo "Se ha escrito toda la información en el fichero";
                        }
                        fclose($ficheroAbierto);
                    }

                }else{
                    echo "<b>No se ha podido subir el archivo :( </b>";
                }
            }
        }
    }
?>