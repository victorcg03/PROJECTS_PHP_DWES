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
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    include("./E4_varsFrutas.php");
    ?>
    <table>
        <thead>
            <tr>
                <th>Variable</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Fruta</td>
                <td><?= $fruta ?></td>
            </tr>
            <tr>
                <td>Tamaño</td>
                <td><?= $tamano ?></td>
            </tr>
            <tr>
                <td>Color</td>
                <td><?= $color ?></td>
            </tr>
            <tr>
                <td>Posición</td>
                <td><?= $posicion ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>