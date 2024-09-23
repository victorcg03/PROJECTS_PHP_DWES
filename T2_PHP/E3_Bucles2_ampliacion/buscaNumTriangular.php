<?php
        for ($n=1; $n <= 500000; $n++) { 
            $resultado = buscarNumero(pow($n,2));
            if ($resultado[0] != 0) {
                echo "<br>El numero de iteraciones para que de igual a " . $n . "^2 es: " . $resultado[0] . " y la secuencia es:" . obtenerSecuencia($resultado[1]);
            } else {
                echo "<br>No hay ninguna coincidencia para $n, esta ha sido la secuencia conseguida:" . obtenerSecuencia($resultado[1]);
            }
            
        }
    function buscarNumero($numeroBuscado) {
        $resultado[0] = 0;
        $suma = 0;
        $contador = 1;
        $secuencia = array();
        while ($suma != $numeroBuscado && $suma < $numeroBuscado) {
            $suma += pow($contador, 2);
            array_push($secuencia, ($contador . "^2"));
            if ($suma == $numeroBuscado) {
                $resultado[0] = $contador;
            }
            $contador++;
        }
        $resultado[1] = $secuencia;
        return $resultado;
    }
    function obtenerSecuencia($secuencia){
        $devolver = "";
        $contador = 0;
        for ($i=0; $i < count($secuencia) && $i < 4; $i++) { 
            $devolver .= $secuencia[$i] . ($i == count($secuencia)-1 ? "" : " + ");
            $contador++;
        }
        if ($contador != count($secuencia)) {
            $devolver .= "..." . end($secuencia);
        }
        return $devolver;
    }
?>