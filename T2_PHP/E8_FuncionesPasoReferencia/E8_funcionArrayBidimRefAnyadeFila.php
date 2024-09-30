<?php
    function farrayBidimRefAnyadeFila($nombre, $papellido, $edad, &$matriz){
        $nuevaFila = array($nombre, $papellido, $edad);
        array_push($matriz, $nuevaFila);
    }
    $personas = array(array("Nombre", "Apellido", "Edad"),array("Pepe", "Sala", 22));
    echo "Contenido inizial Matriz: <br><br>";
    echo "<table>";
    foreach ($personas as $persona){
        echo "<tr>";
        echo "<td>" . $persona[0] . "</td>";
        echo "<td>" . $persona[1] . "</td>";
        echo "<td>" . $persona[2] . "</td>";
        echo "</tr>";
    }
    echo "</table><br>";
    echo "Invocando a función...... <br><br>";
    farrayBidimRefAnyadeFila("Ana", "Varela", 20, $personas);
    echo "Contenido Matriz tras ejecución de función: <br>";
    echo "( Ahora tenemos una fila más ) <br><br>";
    echo "<table>";
    foreach ($personas as $persona){
        echo "<tr>";
        echo "<td>" . $persona[0] . "</td>";
        echo "<td>" . $persona[1] . "</td>";
        echo "<td>" . $persona[2] . "</td>";
        echo "</tr>";
    }
    echo "</table><br>";
?>
<style>
    table, th, td{
        border: 1px solid #000;
        border-collapse: collapse;
    }
</style>