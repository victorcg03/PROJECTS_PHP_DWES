<?php
    require_once "./E10_conectaClientesDb_PDO.php";
    if ($conexion) {
        $sentencia = "DROP TABLE articulo2";
        $stmt = $conexion->prepare($sentencia);
        try{
            if ($stmt->execute()) {
                echo "Se ha borrado la tabla satisfactoriamente";
            } else {
                echo $sql->errorInfo();
            }
        } catch (PDOException $e) {
            echo "Error al borrar la tabla: ".  $e->getMessage();
        } finally {
            $conexion = null;
        }
    }
?>