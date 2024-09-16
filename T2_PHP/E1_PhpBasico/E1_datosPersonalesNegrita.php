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
        echo "Nombre: <b>" . $nombre; 
        echo "</b><br> Apellidos: <b>" . $apellido1 . " " . $apellido2;
        echo "</b><br> Domicilio: <b>" . $domicilio;
        echo "</b><br> Código Postal: <b>" . $codPostal;
        echo "</b><br> Teléfono: <b>" . $telefono;
        echo "</b><br> Profesión: <b>" . $profesion . "</b>";
        ?>
    </body>
</html>