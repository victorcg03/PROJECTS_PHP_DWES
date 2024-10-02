<?php
    function listarVectorTabla($array){
        echo "En forma de tabla: <br>";
        echo "<table border='1'>";
        echo "<tr><td>ELEMENTO</td><td>VALOR</td></tr>";
        for ($i=0; $i < count($array); $i++) { 
            echo "<tr><td>$i</td><td>" . $array[$i] . "</td></tr>";
        }
        echo "</table>";
    }

    function listarVectorNoOrdenada($array){
        echo "En forma de lista no ordenada: <br>";
        echo "<ul>";
        for ($i=0; $i < count($array); $i++) { 
            echo "<li>" . $array[$i] . "</li>";
        }
        echo "</ul>";
    }
?>