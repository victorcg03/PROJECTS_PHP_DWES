<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E2_contadorDesdeInicioaFinIncrementoFor</title>
    <style>
        table, th, td{
            border: 1px solid #000;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php 
        $incremento = 2.5;
        $numInicio = 41;
        $numFinal = 79;
    ?>
    <table>
        <tr><th>Incremento el valor en <?= $incremento?></th></tr>
        <?php
            for($i = $numInicio; $i <= $numFinal; $i += $incremento){
                echo "<tr><td>$i</td></tr>";
            }
        ?>
    </table>
</body>
</html>