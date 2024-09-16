<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E2_paresHasta100For</title>
    </head>
    <body>
        <p>
            <?php
                $numeroInicial = 0;
                $numeroFinal = 100;
                for ($i=$numeroInicial; $i <= $numeroFinal; $i++) { 
                    if ($i % 2 == 0) {
                        echo "|$i";
                    }
                }
            ?>
        </p>
    </body>
</html>