<?php
    echo "<h1>Listado del contenido del directorio actual</h1>";
    echo "<h2>Varias Formas de hacerlo</h2>";
    echo "<h3>versión mediante exec</h3>";
    exec('dir', $resultadoDir);
    echo '<pre>';
    foreach ($resultadoDir as $linea) {
        echo $linea . "<br>";
    }
    echo '</pre>';
    echo "<h3>versión mediante system</h3>";
    echo '<pre>';
    system('dir');
    echo '</pre>';
    echo "<h3>Versión con apóstrofos invertidos</h3>";
    echo "<pre>";
    echo `dir`;
    echo "</pre>";
?>