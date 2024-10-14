<?php
    if (!empty($_GET['n1']) && !empty($_GET['n2'])) {
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];

        echo "<h1>Las operaciones aritméticas son:</h1>";
        echo "La suma vale: " . $n1 + $n2;
        echo "<br>La resta vale: " . $n1 - $n2;
        echo "<br>La multiplicación vale: " . $n1 * $n2;
        echo "<br>La division vale: " . $n1 / $n2;
        echo "<br>El resto de la división vale: " . $n1 % $n2;
        
        echo "<h1>Las operaciones LOGICAS son:</h1>";
        echo "AND de los numeros: " . ($n1 && $n2);
        echo "<br>OR de los numeros: " . ($n1 || $n2);

        echo "<h1>Las operaciones a nivel de BIT son:</h1>";
        echo "AND bit de los numeros: " . ($n1 & $n2);
        echo "<br>OR bit de los numeros: " . ($n1 | $n2);
        echo "<br>Desplazamiento del numero $n1 ==> $n2 posiciones a la izquierda " . ($n1 << $n2);
        echo "<br>Desplazamiento del numero $n1 ==> $n2 posiciones a la derecha " . ($n1 >> $n2);
    } else {
        echo "No hay datos para trabajar con ellos.";
    }
?>