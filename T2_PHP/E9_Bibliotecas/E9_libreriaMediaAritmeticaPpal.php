<?php
    include("./E9_libreriaMediaAritmetica.php");
    mediaValores(10,20,30,40,50,60,80,90);
    mediaArray(array(10,20,30,40));
    $val1 = 10;
    $val2 = 20;
    mediaValoresRefer($val1, $val2);
    echo "<br>La media la muestro desde principal, para comprobar que el valor ha cambiado.";
    echo "<h1>La media es: " . $val2 . "</h1>";
?>