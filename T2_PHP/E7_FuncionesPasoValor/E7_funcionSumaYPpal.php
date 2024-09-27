<?php
    $a = 10;
    $b = 20;
    function suma($num1, $num2){
        return $num1 + $num2;
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
    Asignamos valores a las variables: <br>
    $a= <?= $a ?><br>
    $b= <?= $b ?><br>
    A continuación hacemos la llamada a la función <br>
    La suma de <?= $a ?> y <?= $b ?> es <?= suma($a, $b) ?>
</body>
</html>