<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>o E3_sumaMuestra</title>
</head>
<body>
    <h1>Listado de Números</h1>
    <?php
        $contador = 100;
        $fin = 200;
        $suma = 0;
        while ($contador <= $fin) {
            $suma+=$contador;
            echo "$contador <br>";
            $contador++;
        }
    ?>
    <b>Suma de los Números es:<?=$suma?></b>
</body>
</html>