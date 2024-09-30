<?php
    function farrayBidimRef($nombre, $apellido, $edad, &$matriz){
        $matriz[1][0] = $nombre;
        $matriz[1][1] = $apellido;
        $matriz[1][2] = $edad;
    }
    $persona = array(array("Nombre", "Apellido", "Edad"), array(0,0,0));
    echo "Contenido inicial Matriz: <br>";
    echo "<table>";
    echo "<tr>";
    echo "<td>" . $persona[0][0] . "</td>";
    echo "<td>" . $persona[0][1] . "</td>";
    echo "<td>" . $persona[0][2] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>" . $persona[1][0] . "</td>";
    echo "<td>" . $persona[1][1] . "</td>";
    echo "<td>" . $persona[1][2] . "</td>";
    echo "</tr>";
    echo "</table><br>";

    echo "Invocando a función......<br><br>";
    farrayBidimRef("Ana", "Varela", 20, $persona);
    echo "Contenido Matriz tras ejecución de función: <br><br>";
    echo "<table>";
    echo "<tr>";
    echo "<td>" . $persona[0][0] . "</td>";
    echo "<td>" . $persona[0][1] . "</td>";
    echo "<td>" . $persona[0][2] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>" . $persona[1][0] . "</td>";
    echo "<td>" . $persona[1][1] . "</td>";
    echo "<td>" . $persona[1][2] . "</td>";
    echo "</tr>";
    echo "</table>";
?>
<style>
    table, th, td{
        border: 1px solid #000;
        border-collapse: collapse;
    }
</style>