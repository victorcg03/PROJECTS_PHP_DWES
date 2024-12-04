<?php
    require_once "./E10_conectaClientesDb_PDO.php";
    if ($conexion) {
        $descripcion = "Descripcion modificadaaaaa";
        $precio = 99;
        $stock = 1234;
        $id = 1;

        $sentencia = "UPDATE articulo SET descripcion=?, precio=?, stock=? WHERE idArticulo = ?";
        $stmt = $conexion->prepare($sentencia);
        $stmt->bindParam(1, $descripcion);
        $stmt->bindParam(2, $precio);
        $stmt->bindParam(3, $stock);
        $stmt->bindParam(4, $id);

        try{
            $stmt->execute();
            echo "Se ha actualizado " . $stmt->rowCount() . " fila, con los siguientes datos: descripcion=$descripcion, precio=$precio, stock=$stock al articulo con id $id";
        } catch (PDOException $e) {
            echo "Error al actualizar fila: ".  $e->getMessage();
        } finally {
            $conexion = null;
        }
    }
?>