<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['basicos']) && !empty($_POST['especiales'])) {
        include('../E4_FORMCADENAS/E4_libGeneraContrasenya.php');
        $longitudBasicos = $_POST['basicos'];
        $longitudEspeciales = $_POST['especiales'];
        $orden = $_POST['orden'];
        $passwords = [];
        $numPasswords = $_POST['num'];
        for ($i=0; $i < $numPasswords; $i++) { 
            array_push($passwords, generarPassword($longitudBasicos, $longitudEspeciales));
        }
        echo "<b>Las password generadas aleatoriamente son: <br><br>";
        foreach ($passwords as $password) {
            echo $password . "<br>";
        }


        echo "<br><br>";
        $nombreArchivo = $_POST['archivo'].".txt";
        echo "<b>Intentando escribirlas en el archivo '" . $nombreArchivo . "'<br>";
        if (file_exists($nombreArchivo)) {
            echo "El archivo ya existe, se añadiran al final del archivo...<br><br>";
        } else{
            echo "El archivo no existe, se creará...<br><br>";
        }
        $ficheroAbierto = fopen($nombreArchivo, 'a+');
        if (!$ficheroAbierto) {
            echo "Ha habido un error al abrir el fichero, no se continuará<br>";
        }else{
            $lineasArchivo = file($nombreArchivo);
            foreach ($passwords as $password) {
                if (in_array($password."\n", $lineasArchivo)) {
                    echo "La contraseña " . $password . " ya se encuentra en el archivo. No se añadirá.<br>";
                } else {
                    echo "La contraseña " . $password . " no se encuentra en el archivo. Intentando añadirla...<br>";
                    if (!fwrite($ficheroAbierto, $password."\n")) {
                        echo "No se ha podido escribir la contraseña, ha habido algún error...";
                    } else {
                        echo "Contraseña guardada correctamente.<br>";
                    }
                }
                echo "<br>";
            }
            fclose($ficheroAbierto);
        }
    }
?>