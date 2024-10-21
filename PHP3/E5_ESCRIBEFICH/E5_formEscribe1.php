<?php
    echo "<h1>Gestión de ficheros en PHP</h1>";
    echo "<b>Genera un fichero .txt en el directorio actual</b><br>";
    echo "<p>Versión sin comprobación de erorres en acceso al archivo<br>El fichero se CREA cada vez que ejecutamos</p>";
    $ficheroObjetivo = './E5_mensajes1.txt';
    $fichero = fopen($ficheroObjetivo, 'w');
    fwrite($fichero, "Primera línea del saludo.\n<br>");
    fwrite($fichero, "Segunda línea del saludo.\n<br>");
    fclose($fichero);
?>