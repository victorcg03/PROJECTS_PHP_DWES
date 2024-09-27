<?php
    $num1 = 10;
    $num2 = 20;
    function mediaDosValores($n1, $n2){
        return ($n1 + $n2) / 2;
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
    Valor de los argumentos utilizados: <br>
    =====================================<br>
    argumento 1: <?= $num1 ?><br>
    argumento 2: <?= $num2 ?><br>
    <h1>La media de dichos argumentos es: <?= mediaDosValores($num1, $num2) ?></h1>
</body>
</html>