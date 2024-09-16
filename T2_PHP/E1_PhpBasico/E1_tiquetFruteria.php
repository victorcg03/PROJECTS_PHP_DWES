<?php
    define("PRECIO_JUDIAS", 3.50);
    define("PRECIO_PATATAS", 0.4);
    define("PRECIO_TOMATES", 1);
    define("PRECIO_MANZANAS", 1.2);
    define("PRECIO_UVAS", 2.5);
    
    $pesoJudias = 1.21;
    $pesoPatatas = 1.73;
    $pesoTomates = 2.08;
    $pesoManzanas = 2.15;
    $pesoUvas = 0.77;
    
    $costeJudias = number_format(PRECIO_JUDIAS*$pesoJudias, 2);
    $costePatatas = number_format(PRECIO_PATATAS*$pesoPatatas, 2);
    $costeTomates = number_format(PRECIO_TOMATES*$pesoTomates, 2);
    $costeManzanas = number_format(PRECIO_MANZANAS*$pesoManzanas, 2);
    $costeUvas = number_format(PRECIO_UVAS*$pesoUvas, 2);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fruteria</title>
    </head>
    <body>
        <b>PRODUCTO-PRECIO Euros/KG-PESO-PRECIO</b>
        <p>JUDIAS-<?=PRECIO_JUDIAS?>-<?=$pesoJudias?>-<?=$costeJudias?></p>
        <p>PATATAS-<?=PRECIO_PATATAS?>-<?=$pesoPatatas?>-<?=$costePatatas?></p>
        <p>TOMATES-<?=PRECIO_TOMATES?>-<?=$pesoTomates?>-<?=$costeTomates?></p>
        <p>MANZANAS-<?=PRECIO_MANZANAS?>-<?=$pesoManzanas?>-<?=$costeManzanas?></p>
        <p>UVAS-<?=PRECIO_UVAS?>-<?=$pesoUvas?>-<?=$costeUvas?></p>
        <b>TOTAL: <?= $costeJudias + $costeManzanas + $costePatatas + $costeTomates + $costeUvas ?> euros</b>
        <p>Gracias por su compra.</p>
    </body>
</html>