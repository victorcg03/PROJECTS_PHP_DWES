<?php
    require_once "./E10_conectaClientesDb_PDO.php";
    if ($conexion) {
        echo "Iniciando transacción <br><br>";
        $datos = [
            [20, "articulo insertado 1", 10, 50],
            [21, "articulo insertado 2", 20, 40],
            [22, "articulo insertado 3", 30, 30],
            [23, "articulo insertado 4", 40, 20],
            [24, "articulo insertado 5", 50, 10]
        ];
        $sentenciaSQL = "INSERT INTO articulo VALUES (?,?,?,?)";
        $stmt = $conexion->prepare($sentenciaSQL);
        try{
            $conexion->beginTransaction();
            $filas = 0;
            foreach ($datos as $fila) {
                $stmt->execute($fila);
                $filas++;
            }
            echo "Filas afectadas: $filas";
            $conexion->commit();
        } catch (PDOException $e){
            echo "Error al insertar filas: ".  $e->getMessage();
            $conexion->rollBack();
        } finally {
            $conexion = null;
        }
    }
?>