<?php
    echo "<h1>Añadiendo en fichero</h1>";
    echo "<b>Se AÑADEN datos cada vez que ejecutamos</b><br>";
    $ficheroObjetivo = './E5_mensajes2.txt';
    $fichero = fopen($ficheroObjetivo, 'a+');
    $fecha = new DateTime();
    $dia = $fecha->format('jS');
    $hora = $fecha->format('H:i');
    $mes = $fecha->format('F');
    fwrite($fichero, $hora . ',' . $dia . ' ' . $mes . "\n<br>");
    fwrite($fichero, "Primera línea del saludo.\n<br>");
    fwrite($fichero, "Segunda línea del saludo.\n<br>");
    fclose($fichero);
?>