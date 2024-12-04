<?php
    require_once "./E10_conectaClientesDb_PDO.php";
    if ($conexion) {
        $sentencia = "SELECT * FROM articulo WHERE idArticulo=?";
        $id = 1;
        $stmt = $conexion->prepare($sentencia);
        try{
            $stmt->execute([$id]);
            echo "Filas encontradas: " . $stmt->rowCount() . "<br><br>";
            echo "Visualizamos datos: <br><br>";
            $data = $stmt->fetchAll();
            foreach ($data as $fila) {
                echo "idArticulo: " . $fila['idArticulo'] . "<br>";
                echo "Descripcion: " . $fila['Descripcion'] . "<br>";
                echo "Precio: " . $fila['Precio'] . "<br>";
                echo "Stock: " . $fila['Stock'] . "<br>";
            }
        } catch (PDOException $e) {
            echo "Error al borrar la tabla: ".  $e->getMessage();
        } finally {
            $conexion = null;
        }
    }
?>