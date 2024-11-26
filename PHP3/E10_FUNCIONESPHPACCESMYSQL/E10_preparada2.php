<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $bd = "clientesdb_dwes";

    $conexion = mysqli_connect($host, $user, $password, $bd);
    if ($conexion) {
        echo "Conexión a BD exitosa <br>";
        $sentenciaPreparada = "SELECT idArticulo FROM articulo WHERE Descripcion = ?";
        if ($stmt = mysqli_prepare($conexion, $sentenciaPreparada)) {
            $descripcion = "Mochila M28";
            mysqli_stmt_bind_param($stmt, "s", $descripcion);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $id);
            mysqli_stmt_fetch($stmt);
            echo $id . " es el idArticulo del producto " . $descripcion;
        }
        
        mysqli_close($conexion);
    } else {
        echo "Ha habido un error al conectar a " . $bd;
    }
?>