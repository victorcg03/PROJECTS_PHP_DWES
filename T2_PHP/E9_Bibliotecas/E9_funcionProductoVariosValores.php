<?php
    echo "<h3>Estamos en Programa Principal</h3>";
    echo "El valor de los parámetros lo establecemos desde él <br>";
    $val1 = 1;
    $val2 = 2;
    $val3 = 3;
    $val4 = 4;
    $val5 = 5;
    $val6 = 6;
    echo "Hacemos la llamada a la función....";
    productoValores($val1, $val2, $val3, $val4, $val5, $val6);
    function productoValores(){
        echo "<h3>Función Producto</h3>";
        echo "Número de elementos a multiplicar: " . func_num_args() . "<br><br>";
        echo "Valores: <br>";
        $valores = func_get_args();
        echo "========<br>";
        echo "(";
        $producto = 1;
        for ($i=0; $i < count($valores); $i++) { 
            echo $valores[$i];
            if ($i != count($valores)-1) echo ",";
            $producto *= $valores[$i];
        }
        echo ")<br><br>";
        echo "<b>El producto es: " . $producto . "</b>";
    }
?>