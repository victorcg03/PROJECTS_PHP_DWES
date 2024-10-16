<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['numero'])) {
        echo "<h1>VER LA TABLA DEL " . $_GET['numero'] . "</h1>";
        echo "<table border='1px'>";
        for ($i=0; $i <= 10; $i++) { 
            echo "<tr>";
            echo "<td>" . $_GET['numero'] . " X " . $i . "</td>";
            echo "<td>" . $_GET['numero'] * $i . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    echo "<a href='E3_multiplicar.php'>Volver atras</a>";
?>