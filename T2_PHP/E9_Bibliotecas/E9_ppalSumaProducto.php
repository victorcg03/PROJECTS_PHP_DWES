<?php
include("./E9_funcionSumaProducto.php");
    echo "Asignamos valores a los dos valores <br>";
    $a = 10;
    $b = 20;
    echo '$a= ' . $a;
    echo '<br>$b= ' . $b;
    echo "<br><br>Llamada a Funcion <b>Suma</b><br>";
    suma($a, $b);
    echo "<br>";
    echo "Llamada a la Funcion <b>Producto</b><br>";
    producto($a, $b);
?>