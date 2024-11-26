<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $bd = "clientesdb_dwes";

    $conexion = mysqli_connect($host, $user, $password, $bd);
    if ($conexion) {
        echo "Conexión exitosa a " . $bd;
        mysqli_close($conexion);
    } else {
        echo "Ha habido un error al conectar a " . $bd;
    }
?>