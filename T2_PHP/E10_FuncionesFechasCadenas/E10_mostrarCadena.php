<?php
    function mostrar_impares($cadena){
        echo "La cadena recibida como argumento era: <br>";
        echo $cadena . "<br>";
        echo "La cadena con los caracteres impares es: <br>";
        $longitudCadena = strlen($cadena);
        $cadenaNueva = "";
        for ($i=0; $i < $longitudCadena; $i++) { 
            if (($i+1) % 2 != 0) {
                $cadenaNueva .= $cadena[$i];
            }
        }
        echo "<b>" . $cadenaNueva . "</b><br>";
    }

    function muestra_palabras_impares($cadena){
        echo "La cadena recibida como argumento era: <br>";
        echo $cadena . "<br>";
        echo "La cadena con las palabras impares queda así: <br>";
        $palabrasSeparadas = explode(" ", $cadena);
        $cadenaNueva = "";
        for ($i=0; $i < count($palabrasSeparadas); $i++) { 
            if (($i + 1) % 2 != 0) {
                $cadenaNueva .= $palabrasSeparadas[$i] . " ";
            }
        }
        echo "<b>" . $cadenaNueva . "</b><br>";
    }

    $cadena = "A quien madruga Dios le ayuda";
    echo "Invocamos a la función mostrar_impares....<br>";
    mostrar_impares($cadena);
    echo "<br><br><br>";
    echo "Incovamos a función muestra_palabras_impares.... <br>";
    muestra_palabras_impares($cadena);

?>