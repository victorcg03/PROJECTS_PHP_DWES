<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td{
            border: 1px solid #000;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th colspan="2">Datos Personales</th>
            </tr>
        </thead>
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
        $cabeceras = array("Nombre", "Apellidos", "Edad", "Tlf móvil");
        echo "<b>Los Datos del array son:</b><br>";
        $contador = 0;
        for ($i=0; $i < count($datosPersonales) / count($cabeceras); $i++) { 
            foreach ($cabeceras as $cabecera) {
                echo "<tr><td><b>$cabecera</b></td>";
                echo "<td>$datosPersonales[$contador]</td></tr>";
                $contador++;
            } 
        }
    ?>
    </table>
</body>
</html>