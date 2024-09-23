<?php
    $x = 8;
    $resultado = 1;
    $terminos = 200;
    for ($i=1; $i <= $terminos; $i++) { 
        $resultado += pow($x, $i) / factorialDe($i);
    }
    echo "El valor de e elevado a $x usando 2,7182 es " . pow(2.7182, $x) . "<br>";
    echo "El valor calculado con $terminos términos es: " . $resultado . "<br>";
    echo "El valor exacto usando la función exp es: " . exp($x);
    function factorialDe($n) {
        $devolver = 1;
        while ($n != 0) {
            $devolver *= $n;
            $n--;
        }
        return $devolver;
    }
?>