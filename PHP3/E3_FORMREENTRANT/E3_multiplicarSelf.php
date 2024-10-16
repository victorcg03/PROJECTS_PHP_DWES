<?php
    echo "<b>Tablas de multiplicar autollamante</b><br><br>";

    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['numero'])) {
        echo "<table border='1px'>";
        for ($i=0; $i <= 10; $i++) { 
            echo "<tr>";
            echo "<td>" . $_GET['numero'] . " X " . $i . "</td>";
            echo "<td>" . $_GET['numero'] * $i . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<a href='E3_multiplicarSelf.php'>Volver atras</a>";

    } else {
        echo "<table border='1px'>";
        for ($i=1; $i <= 10; $i++) { 
            echo "<tr><td><a href='E3_multiplicarSelf.php?numero=$i'>Ver la tabla del $i</a><br></td></tr>";
        }
        echo "</table>";
    }
?>