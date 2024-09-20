<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E4_datPersonalesInclude</title>
    <style>
        table, th, td{
            border: 1px solid #000;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
    include("./E4_datPersonales.php");
    ?>
<table>
        <thead>
            <tr>
                <th colspan="2">Datos Personales</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nombre</td>
                <td><?= $nombre ?></td>
            </tr>
            <tr>
                <td>Apellidos</td>
                <td><?= $apellidos ?></td>
            </tr>
            <tr>
                <td>Edad</td>
                <td><?= $edad ?></td>
            </tr>
            <tr>
                <td>Tlf Móvil</td>
                <td><?= $numTelefono ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>