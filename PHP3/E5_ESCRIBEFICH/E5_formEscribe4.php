<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['frenos']) && !empty($_POST['aceite']) && !empty($_POST['ruedas']) && !empty($_POST['nombre']) && !empty($_POST['direccion'])) {
            $rutaCarpetaDestino = './E5_peticiones';
            $existeCarpeta = @opendir($rutaCarpetaDestino);
            if (!$existeCarpeta) {
                mkdir($rutaCarpetaDestino); 
            }
            $rutaArchivoDestino = $rutaCarpetaDestino . '/E5_petic4.txt';
            $archivoDestino = fopen($rutaArchivoDestino, 'a+');
            if (!$archivoDestino) {
                echo "Ha habido un error al ABRIR el archivo.<br>";
            }else{
                define('RUEDAS', 4);
                define('ACEITE', 10);
                define('FRENOS', 100);
                $fecha = getdate()['mday'].'/'.getdate()['mday'].'/'.getdate()['year'];
                $nombre = $_POST['nombre'];
                $direccion = $_POST['direccion'];
                $nFrenos = $_POST['frenos'];
                $nAceite = $_POST['aceite'];
                $nRuedas = $_POST['ruedas'];
                echo "<b>Escritura en fichero en carpeta PETICIONES</b><br><br>";
                echo "Su petición Sr. " . $nombre . " es la siguiente: <br>";
                echo $nFrenos . " frenos. <br>";
                echo $nAceite . " latas de aceite. <br>";
                echo $nRuedas . " ruedas. <br>";
                echo "Importe total: " . $nFrenos * FRENOS + $nAceite * ACEITE + $nRuedas * RUEDAS;
                echo "<br>Intentamos volcar la información<br>";
                echo "<p>...............</p>";
                $resultadoEscritura = fwrite($archivoDestino, $fecha . "\t" . $nombre . "\t" . $direccion . "\t" . $nFrenos . "\t" . $nAceite . "\t" . $nRuedas . "\n");
                if (!$resultadoEscritura) {
                    echo "<h1>SE HA PRODUCIDO UN ERROR AL ESCRIBIR EN EL ARCHIVO </h1><br>";
                }else{
                    echo "<i>Escrita la información en archivo</i><br><br>";
                    echo "<i>" . realpath($rutaArchivoDestino) . "</i>";
                }
                fclose($archivoDestino);
            }
        }
    }
?>