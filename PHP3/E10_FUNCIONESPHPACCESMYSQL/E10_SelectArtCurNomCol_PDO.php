<?php
    require_once "./E10_conectaClientesDb_PDO.php";
    if ($conexion) {
        $sentencia = "SELECT * FROM articulo";
        $id = 1;
        $stmt = $conexion->prepare($sentencia, [PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL]);
        try{
            $stmt->execute();
            echo "Filas encontradas: " . $stmt->rowCount() . "<br><br>";
            echo "Visualizamos datos: <br><br>";
            echo "<table border=1>";
            echo "<thead>";
            echo "<th>Nº Fila</th><th>idArticulo</th><th>Descripcion</th><th>Precio</th><th>Stock</th>";
            echo "</thead>";
            $i = 1;
            while ($fila = $stmt -> fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) {
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>" . $fila['idArticulo'] . "</td>";
                echo "<td>" . $fila['Descripcion'] . "</td>";
                echo "<td>" . $fila['Precio'] . "</td>";
                echo "<td>" . $fila['Stock'] . "</td>";
                echo "</tr>";
                $i++;
            }
            echo "</table>";
        } catch (PDOException $e) {
            echo "Error al borrar la tabla: ".  $e->getMessage();
        } finally {
            $conexion = null;
        }
    }
?>