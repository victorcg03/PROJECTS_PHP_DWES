<?php
    function mediaAritmetica(){
        $numArgs = func_num_args();
        echo "Número de argumentos utilizados: " . $numArgs . "<br>";
        $suma = 0;
        echo "Valor de los argumentos utilizados: <br>";
        echo "======================================== <br>";
        $valores = func_get_args();
        for ($i=0; $i < count($valores); $i++) { 
            echo "Parámetro " . $i . " ==> valor: " . $valores[$i] . "<br>";
            $suma += $valores[$i];
        }
        $media = $suma / $numArgs;
        echo "<h1>La media de dichos argumentos es: " . $media . "</h1>";
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
    <?php
        mediaAritmetica(10,20,30,40);
    ?>
</body>
</html>