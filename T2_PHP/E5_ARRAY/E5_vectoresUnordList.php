<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $vectorNumeros = array(1,2,3,4,5,6,7,8,9,10);
        $vectorNumeros2[0] = 1;
        $vectorNumeros2[1] = 2;
        $vectorNumeros2[2] = 3;
        $vectorNumeros2[3] = 4;
        $vectorNumeros2[4] = 5;
        $vectorNumeros2[5] = 6;
        $vectorNumeros2[6] = 7;
        $vectorNumeros2[7] = 8;
        $vectorNumeros2[8] = 9;
        $vectorNumeros2[9] = 10;
    ?>
    <h1>Vector declarado de forma abreviada:</h1>
    <ul>
        <?php
            for ($i=0; $i < count($vectorNumeros); $i++) { 
                echo "<li>Elemento " . $i . " vale: " . $vectorNumeros[$i] . "</li>";
            }
        ?>
    </ul>
    <h1>Vector declarado de forma desarrollada:</h1>
    <ul>
        <?php
            for ($i=0; $i < count($vectorNumeros2); $i++) { 
                echo "<li>Elemento " . $i . " vale: " . $vectorNumeros2[$i] . "</li>";
            }
        ?>
    </ul>
</body>
</html>