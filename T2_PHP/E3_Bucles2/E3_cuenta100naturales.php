<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E3_cuenta100naturales</title>
</head>
<body>
    <?php
        $inicio = 5;
        $fin = 100;
        $suma = 0;
        for ($i=$inicio; $i <= $fin; $i++) { 
            echo $i == $inicio ? "$i" : "-$i";
            $suma+= $i;
        }
    ?>
    <p>La suma de los números entre 1 y 100 es: <b><?=$suma?></b></p> 
</body>
</html>