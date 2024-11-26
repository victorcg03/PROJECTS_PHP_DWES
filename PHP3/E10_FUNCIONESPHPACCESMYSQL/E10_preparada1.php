<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $bd = "clientesdb_dwes";

    $conexion = mysqli_connect($host, $user, $password, $bd);
    if ($conexion) {
        echo "Conexión a BD exitosa <br>";
        $sentenciaPreparada = "INSERT INTO articulo VALUES (?, ? , ?, ?)";
        $sentencia = mysqli_prepare($conexion, $sentenciaPreparada);
        mysqli_stmt_bind_param($sentencia, "isid", $id, $descripcion, $precio, $stock);
        $id = 23;
        $descripcion = "Articulo 23 :D";
        $precio = 12.89;
        $stock = 1000;
        $resultado = mysqli_stmt_execute($sentencia);
        if ($resultado){
            echo "Registros insertados: " . mysqli_affected_rows($conexion);
            mysqli_stmt_close($sentencia);
        }
        mysqli_close($conexion);
    } else {
        echo "Ha habido un error al conectar a " . $bd;
    }
?>