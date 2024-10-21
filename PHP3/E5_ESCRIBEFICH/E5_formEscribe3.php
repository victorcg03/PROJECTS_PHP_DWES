<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['nombre']) && !empty($_POST['direccion'])) {
        $rutaArchivoDestino = './E5_petic3.txt';
        $archivoAbierto = fopen($rutaArchivoDestino, 'a+');
        if (!$archivoAbierto) {
            echo "Ha habido un error al abrir el archivo, no se ha podido escribir nada";
        }else{
            echo "<h1>Escritura datos Formulario en archivo</h1>";
            echo "<b><i>Incluye control de error en apertura y escritura de fichero</i></b><br><br>";
            $nombre = $_POST['nombre'];
            $direccion = $_POST['direccion'];
            echo "<p>Intentando volcar la información al archivo ....</p>";
            $respuesta = fwrite($archivoAbierto, getdate()['mday'].'/'.getdate()['mday'].'/'.getdate()['year'].'      '.$nombre.'      '.$direccion . "\n");
            if (!$respuesta) {
                echo "<b>Se ha producido un error al ESCRIBIR en el archivo</b><br>";
            } else {
                echo "<b>Se ha escrito correctamente en el archivo</b><br>";
            }
            fclose($archivoAbierto);   
        }

    }
?>