<?php
    $numeros[0][0] = 10;
    $numeros[0][1] = 20;
    $numeros[0][2] = 30;
    $numeros[1][0] = 40;
    $numeros[1][1] = 50;
    $numeros[1][2] = 60;
    $numeros[2][0] = 70;
    $numeros[2][1] = 80;
    $numeros[2][2] = 90;

    $letras = array(
        array("A","B","C"),
        array("D", "E", "F")
    );
    echo("Visualizamos con FOR anidado:<br>");
    for ($i=0; $i < count($numeros); $i++) { 
        for ($j=0; $j < count($numeros[$i]); $j++) { 
            echo($numeros[$i][$j] . " ");
        }
        echo("<br>");
    }
    echo("Visualizamos con WHILE:<br>");
    $fila = 0;
    while ($fila < count($letras)) {
        $letra = 0;
        while ($letra < count($letras[$fila])) {
            echo($letras[$fila][$letra] . " ");
            $letra++;
        }
        echo("<br>");
        $fila++;
    }
?>