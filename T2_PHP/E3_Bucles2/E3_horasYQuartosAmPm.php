<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E3_horasYQuartosAmPm</title>
</head>
<body>
    <b>HORAS AM:</b><br>
    <?php
        for ($hora=0; $hora < 24; $hora++) { 
            $amPm = $hora < 12 ? "AM" : "PM";
            $horaFormateada = sprintf("%02d", $hora);
            for ($minuto=0; $minuto < 60; $minuto+= 15) { 
                $minutosFormateados = sprintf("%02d", $minuto);
                echo "$horaFormateada:$minutosFormateados $amPm <br>";
            }
            echo "<br>";
        }
    ?>
</body>
</html>