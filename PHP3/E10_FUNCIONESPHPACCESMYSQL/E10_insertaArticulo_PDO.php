<?php
    require("./E10_conectaClientesDb_PDO.php");
    if ($conexion) {
        $id = 1323;
        $descripcion = "Articulo insertado con PHP";
        $precio = 400;
        $stock = 10;
        $sentenciaSQL = "INSERT INTO articulo VALUES (?,?,?,?)";
        $stmt = $conexion->prepare($sentenciaSQL);
        try{
            $stmt->bindParam(1, $id);
            $stmt->bindParam(2, $descripcion);
            $stmt->bindParam(3, $precio);
            $stmt->bindParam(4, $stock);
            
            $stmt->execute();
            echo "Filas insertadas: " . $stmt->rowCount();
            $conexion = null;
        } catch (PDOException $e) {
            echo "Error al insertar filas: ".  $e->getMessage();
            $conexion = null;
        }
    }
?>