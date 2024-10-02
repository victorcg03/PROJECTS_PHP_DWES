<?php
    function arraySuma($array){
        echo "<h3>Funcion arraySuma: </h3>";
        echo "<p>Numero de elementos del array: " . count($array) . "</p>";
        echo "<p>Los elementos del array son:</p>";
        $suma = 0;
        foreach ($array as $numero) {
            echo $numero . "<br>";
            $suma += $numero;
        }
        echo "<b>SUMA="  . $suma . "</b>";
    }

    function arraySumaTabla($array){
        echo "<h3>Funcion arraySumaTabla: </h3>";
        echo "<b>Visualiza array como tabla</b>";
        echo "<table border='1'>
                <thead>
                    <tr>
                        <th>Posición</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody> ";
        $suma = 0;
        for ($i=0; $i < count($array); $i++) {
            echo "<tr>"; 
            echo "<td>" . $i . "</td>";
            echo "<td>" . $array[$i] . "</td>";
            $suma += $array[$i];
            echo "</tr>";
        }
        $media = $suma / count($array);

        echo "</tbody>
                <tfoot>
                    <tr>
                        <td><b>SUMA</td></b></td>
                        <td><b>$suma</b></td>
                    </tr>
                    <tr>
                        <td><b>MEDIA</b></td>
                        <td><b>$media</b></td>
                    </tr>
                </tfoot>
             </table>";
    }
?>