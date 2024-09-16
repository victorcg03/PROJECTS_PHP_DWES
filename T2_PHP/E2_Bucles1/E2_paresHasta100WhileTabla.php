<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E2_paresHasta100WhileTabla</title>
    <style>
        table, th, td{
            border: 1px solid #000;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Números Pares</th>
        </tr>
        <?php 
            $contador = 0;
            $limite = 100;
            while ($contador <= $limite) {
                if ($contador % 2 == 0) {
                    echo "<tr><td>$contador</td></tr>";
                }
                $contador++;
            }
        ?>
    </table>
</body>
</html>