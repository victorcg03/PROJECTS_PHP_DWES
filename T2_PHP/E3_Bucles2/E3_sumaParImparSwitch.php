<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E3_sumaParImparSwitch</title>
</head>
<body>
    <?php
        $inicio = 0;
        $fin = 100;
        $sumaImpares = 0;
        $sumaPares = 0;
        for ($i=$inicio; $i <= $fin; $i++) { 
            switch ($i % 2) {
                case 0:
                    $sumaPares+=$i;
                    break;
                
                default:
                    $sumaImpares+=$i;
                    break;
            }
        }
    ?>
    <p>En el rango <?=$inicio?> ... <?=$fin?></p>
    <p>La suma de los <b>PARES</b> es: <?=$sumaPares?></p>
    <p>La suma de los <b>IMPARES</b> es: <?=$sumaImpares?></p>
</body>
</html>