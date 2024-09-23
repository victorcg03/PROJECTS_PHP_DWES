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
    <?php
        $numeros = array(100,200,300,400,500);
    ?>
    <h1>Visualiza array como tabla</h1>
    <table>
        <thead>
            <tr>
                <th>Posición</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $suma = 0;
                for ($i=0; $i < count($numeros); $i++) {
                    echo "<tr>"; 
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . $numeros[$i] . "</td>";
                    $suma += $numeros[$i];
                    echo "</tr>";
                }
                $media = $suma / count($numeros);
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td><b>SUMA</td></b></td>
                <td><b><?= $suma ?></b></td>
            </tr>
            <tr>
                <td><b>MEDIA</b></td>
                <td><b><?= $media ?></b></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>