<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E3_cuentaAprobados</title>
</head>
<body>
    <?php
    $numAprobados = 0;
        for ($i=0; $i < 5; $i++) { 
            $nota = rand(0, 10);
            echo "$nota <br>";
            if($nota >= 5){
                $numAprobados++;
            }
        }
    ?>
    <b>El número de aprobados es : <?= $numAprobados?></b>
</body>
</html>