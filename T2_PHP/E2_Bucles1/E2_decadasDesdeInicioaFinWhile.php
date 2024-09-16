<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E2_decadasDesdeInicioaFinWhile</title>
    <style>
        table, th, td{
            border: 1px solid #000;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
        $inicio = 2000;
        $fin = 2100; 
        $contador = $inicio % 10 == 0 ? $inicio : $inicio + (10 - $inicio % 10);
    ?>
    <table>
        <tr><th>Décadas desde el <?=$inicio?> al <?=$fin?></th></tr>
        <?php
            while ($contador <= $fin) {
                echo "<tr><td>$contador</td></tr>";
                $contador += 10;
            }
        ?>
    </table>
</body>
</html>