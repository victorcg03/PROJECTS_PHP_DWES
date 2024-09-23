<?php
    $n = 14;
    echo "<br>El número " . $n . (esReproductor($n) ? " es" : " no es") . " reproductor de fibonacci";

    function esReproductor($n) {
        $numerosSeperados = str_split($n, 1);
        $serie = array($numerosSeperados[0], $numerosSeperados[1]);
        $valorActual = end($serie);
        while ($valorActual <= $n) {
            array_push($serie, $valorActual + prev($serie));
            $valorActual = end($serie);
            if ($valorActual == $n) {
                echo "La serie ha quedado así: ". implode(",", $serie);
                return true;
            }
        }
        echo "La serie ha quedado así: ". implode(",", $serie);
        return false;
    }

?>