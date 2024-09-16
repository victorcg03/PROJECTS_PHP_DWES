<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E3_sumaMuestraTablaAcumulados</title>
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
                <th>Listado de Números</th>
                <th>Suma Acumulada</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $contador = 100;
                $fin = 200;
                $sumaAcumulada = 0;
                while ($contador <= $fin) { ?>
                <tr><td><?=$contador?></td><td><?=$sumaAcumulada?></td></tr>
                <?php
                    $sumaAcumulada+= $contador;
                    $contador++;
                }
            ?>
        </tbody>
    </table>
</body>
</html>