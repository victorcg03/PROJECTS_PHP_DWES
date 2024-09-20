<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>datPersonalesAlumnos</title>
    <style>
        table, th, td{
            border: 1px solid #000;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        include("./E4_datPersonalesAlumnos.php");
    ?>
    <table>
        <thead>
            <tr>
                <th colspan="2">Datos Personales Alumnos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nombre 1</td>
                <td><?= $nombre_1 ?></td>
            </tr>
            <tr>
                <td>Apellidos 1</td>
                <td><?= $apellidos_1 ?></td>
            </tr>
            <tr>
                <td>Edad 1</td>
                <td><?= $edad_1 ?></td>
            </tr>
            <tr>
                <td>Tlf Móvil 1</td>
                <td><?= $tlfMov_1 ?></td>
            </tr>
            <tr>
                <td colspan="2">==========</td>
            </tr>
            <tr>
                <td>Nombre 2</td>
                <td><?= $nombre_2 ?></td>
            </tr>
            <tr>
                <td>Apellidos 2</td>
                <td><?= $apellidos_2 ?></td>
            </tr>
            <tr>
                <td>Edad 2</td>
                <td><?= $edad_2 ?></td>
            </tr>
            <tr>
                <td>Tlf Móvil 2</td>
                <td><?= $tlfMov_2 ?></td>
            </tr>
            <tr>
                <td colspan="2">==========</td>
            </tr>
        </tbody>
    </table>
</body>
</html>