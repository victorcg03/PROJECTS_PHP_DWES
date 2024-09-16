<?php 
    $nombre = "Victor";
    $apellido1 = "Corral";
    $apellido2 = "Guillot";
    $domicilio = "Av/ Amado Granell mesado, 44";
    $codPostal = "46006";
    $telefono = "622569369";
    $profesion = "Tecnico Superior en Desarrollo WEB";
?>
<html>
    <head>
        <title>nombreApellidos</title>
    </head>
    <body>
        <?php
        echo "Nombre: " . $nombre; 
        echo "<br> Apellidos: " . $apellido1 . " " . $apellido2;
        echo "<br> Domicilio: " . $domicilio;
        echo "<br> Código Postal: " . $codPostal;
        echo "<br> Teléfono: " . $telefono;
        echo "<br> Profesión: " . $profesion;
        ?>
    </body>
</html>