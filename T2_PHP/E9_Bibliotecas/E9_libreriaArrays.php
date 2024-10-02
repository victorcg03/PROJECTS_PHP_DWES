<?php
    function vectoresUnordList($array){
        echo "Funcion vectoresUnordList:";
        echo "<ul>";
        for ($i=0; $i < count($array); $i++) { 
            echo "<li>Elemento " . $i . " vale: " . $array[$i] . "</li>";
        }
        echo "</ul>";
    }
    function vectoresUnordListRange(){
        $vectorNumeros = range(10, 100, 10);
        echo "Funcion vectoresUnordListRange:";
        echo "<ul>";
        for ($i=0; $i < count($vectorNumeros); $i++) { 
            echo "<li>Elemento " . $i . " vale: " . $vectorNumeros[$i] . "</li>";
        }
        echo "</ul>";
    }
    function vectoresWhile($array){
        echo "Funcion vectoresWhile:";
        $elementoActual = reset($array);
        echo "<ul>";
        while ($elementoActual) {
            echo "<li>" . $elementoActual . "</li>";
            $elementoActual = next($array);
        }
        echo "</ul>";
    }
    function vectoresInverso($array){
        echo "Funcion vectoresInverso:";
        $elementoActual = end($array);
        echo "<ul>";
        while ($elementoActual) {
            echo "<li>" . $elementoActual . "</li>";
            $elementoActual = prev($array);
        }
        echo "</ul>";
    }
    function vectoresIForeach($datos){
        echo "Funcion vectoresIForeach:";
        echo "<ul>";
        foreach ($datos as $dato) {
            echo "<li>" . $dato . "</li>";
        }
        echo "</ul>";
    }
?>