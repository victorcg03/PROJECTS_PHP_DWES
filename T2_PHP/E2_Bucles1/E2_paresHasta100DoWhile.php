<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E2_paresHasta100DoWhile</title>
</head>
<body>
    <p>
    <?php
    $contador = 0;
    $limite = 100;
        do {
            if($contador % 2 == 0){
                echo "|$contador";
            }
            $contador++;
        } while ($contador <= $limite);
    ?>
    </p>
</body>
</html>