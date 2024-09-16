<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E3_horasFor</title>
</head>
<body>
    <?php
        for ($hora=0; $hora < 24; $hora++) { 
            echo "Fracciones de " . ($hora == 1 ? "la $hora" : "las $hora") . "<br>";
            $horaFormateada = sprintf("%02d", $hora);
            for ($minuto=0; $minuto < 60; $minuto+= 5) { 
                $minutosFormateados = sprintf("%02d", $minuto);
                echo "$horaFormateada:$minutosFormateados <br>";
            }
        }
    ?>
</body>
</html>