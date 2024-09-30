<?php
    function fArrayREF($nombre, $apellido, $edad, &$persona){
        $persona[0] = $nombre;
        $persona[1] = $apellido;
        $persona[2] = $edad;
    }
    $laPersona = array(0,0,0);
    echo "Contenido inicial array: <br><br>";
    echo "<table>";
    echo "<tr>";
    echo "<td>" . $laPersona[0] . "</td>";
    echo "<td>" . $laPersona[1] . "</td>";
    echo "<td>" . $laPersona[2] . "</td>";
    echo "</tr>";
    echo "</table>";
    echo "Invocando a función........ <br>";
    fArrayREF("Ana", "Varela", 20, $laPersona);
    echo "Contenido tras la ejecución de la función: <br><br>";
    echo "<table>";
    echo "<tr>";
    echo "<td>" . $laPersona[0] . "</td>";
    echo "<td>" . $laPersona[1] . "</td>";
    echo "<td>" . $laPersona[2] . "</td>";
    echo "</tr>";
    echo "</table>";
?>
<style>
    table, th, td{
        border: 1px solid #000;
        border-collapse: collapse;
    }
</style>