<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E2_paresHasta100While</title>
</head>
<body>
    <?php
    $contador = 0;
    $limiteMax = 100;
    $numerosPares = "";
    while ($contador <= $limiteMax) {
        if ($contador % 2 == 0) {
            $numerosPares = $numerosPares . "|" . $contador;
        }
        $contador++;
    }
    echo $numerosPares;
    ?>
</body>
</html>