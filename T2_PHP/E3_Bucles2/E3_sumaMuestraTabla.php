<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E3_sumaMuestraTabla</title>
    <style>
        table, th, td{
            border: 1px solid #000;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <tbody>
            <?php
                $contador = 200;
                $fin = 500;
                $suma = 0;
                while ($contador <= $fin) {
                    $suma+=$contador;
                    echo "<tr><td>$contador</td></tr>";
                    $contador++;
                }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td><b>Suma: <?=$suma?></b></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>