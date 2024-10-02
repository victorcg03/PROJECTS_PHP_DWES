<?php
    function producto($val1, $val2){
        echo "<b>Producto</b><br>";
        echo "Producto de " . $val1 ." y ". $val2 . "=<b>" . $val1 * $val2 . "</b><br><br>";
    }
    function productoValores(){
        echo "<b>Función Producto Varios</b><br>";
        echo "Número de elementos a multiplicar: " . func_num_args() . "<br>";
        echo "Valores:";
        $valores = func_get_args();
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