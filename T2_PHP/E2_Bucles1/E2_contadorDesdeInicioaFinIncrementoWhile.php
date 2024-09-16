<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E2_contadorDesdeInicioaFinIncrementoWhile</title>
    <style>
        table, th, td{
            border: 1px solid #000;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php 
        $incremento = 3;
        $numInicio = 31;
        $numFinal = 51;
    ?>
    <table>
        <tr><th>Incremento el valor en <?= $incremento?></th></tr>
        <?php
            while ($numInicio <= $numFinal) {
                echo "<tr><td>$numInicio</td></tr>";
                $numInicio += $incremento;
            }
        ?>
    </table>
</body>
</html>