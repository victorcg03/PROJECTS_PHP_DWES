<?php
    require_once "./E10_conectaClientesDb_PDO.php";
    if ($conexion) {
        $id = 23;

        $sentencia = "DELETE FROM articulo WHERE idArticulo=?";
        $stmt = $conexion->prepare($sentencia);
        $stmt->bindParam(1, $id);

        try{
            $stmt->execute();
            echo "Se ha borrado " . $stmt->rowCount() . " fila";
        } catch (PDOException $e) {
            echo "Error al borrar fila: ".  $e->getMessage();
        } finally {
            $conexion = null;
        }
    }
?>