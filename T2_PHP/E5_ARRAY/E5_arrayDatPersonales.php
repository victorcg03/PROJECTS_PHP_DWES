<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("./E5_datPersonales.php");
        $datosPersonales[0] = $nombre1;
        $datosPersonales[1] = $apellidos1;
        $datosPersonales[2] = $edad1;
        $datosPersonales[3] = $movil1;
        $datosPersonales[4] = $nombre2;
        $datosPersonales[5] = $apellidos2;
        $datosPersonales[6] = $edad2;
        $datosPersonales[7] = $movil2;
        echo "<b>Los Datos del array son:</b><br>";
        foreach ($datosPersonales as $dato) {
            echo $dato . "<br>";
        }
    ?>
</body>
</html>