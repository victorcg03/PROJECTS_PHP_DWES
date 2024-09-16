<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E2_decadasHasta100DoWhileTabla</title>
    <style>
        table, th, td{
            border: 1px solid #000;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <tr><th>Decadas 0 a 100</th></tr>
        <?php
            $contador = 0;
            $fin = 100;
            do {
                echo "<tr><td>$contador</td></tr>";
                $contador += 10;
            } while ($contador <= $fin);
        ?>
    </table>
</body>
</html>