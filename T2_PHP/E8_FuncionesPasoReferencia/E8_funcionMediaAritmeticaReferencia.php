<?php
    function mediaValoresRefer($val1, &$val2){
        $val2 = ($val1 + $val2) / 2;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<b>Programa Principal</b><br>
<?php 
    $val1 = 10;
    $val2 = 30;
?>
El valor de los parámetros lo establecemos desde él. <br>
Hacemos la llamada a la función. <br><br>
<b>Función Media Aritmética</b><br>
Número de argumentos utilizados: 2 <br><br>
Valor de los argumentos utilizados: <br>
<?= $val1 ?> y <?= $val2 ?> <br>
<?php
    mediaValoresRefer($val1, $val2);
?>
No hace falta hacer Return <br>
El resultado está en num2 y es <b><?= $val2 ?></b>
</body>
</html>