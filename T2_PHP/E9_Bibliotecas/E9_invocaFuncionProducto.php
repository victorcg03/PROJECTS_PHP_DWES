<?php
include("./E9_Funcionproducto.php");
    echo "Asignamos valores a las variables: <br><br>";
    $val1 = 10;
    $val2 = 20;
    echo "Multiplicando: " . $val1;
    echo "<br>Multiplicador: " . $val2;

    echo "<br><br>Invocamos la función <br>";
    echo "Se encuentra en el archivo: <b>funcionProducto.php</b><br>";
    echo "El resultado de " . $val1 . " X " . $val2 . " es <b>" . producto($val1, $val2) . "</b>"; 
?>