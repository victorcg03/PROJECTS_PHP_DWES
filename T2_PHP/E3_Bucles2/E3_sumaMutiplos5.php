<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E3_sumaMutiplos5</title>
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
                <th>Listado de Múltiplos</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $numeroBase = 5;
                $limiteMultiplo = 15;
                $suma = 0;
                for ($i=1; $i <= $limiteMultiplo; $i++) {
                    $suma += $numeroBase * $i; 
                    echo "<tr><td> " . $numeroBase * $i . " </td></tr>";
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