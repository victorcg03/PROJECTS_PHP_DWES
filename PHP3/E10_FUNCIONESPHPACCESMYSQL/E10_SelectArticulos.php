<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $bd = "clientesdb_dwes";

    $conexion = mysqli_connect($host, $user, $password, $bd);
    if ($conexion) {
        $sentenciaSQL = "SELECT * FROM ARTICULO";
        $resultado = mysqli_query($conexion, $sentenciaSQL);
        echo "Filas afectadas: " . mysqli_affected_rows($conexion) . "<br>";
        $filas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        foreach ($filas as $fila) {
            print_r($fila);
            echo "<br>";
        }
        mysqli_close($conexion);
    } else {
        echo "Ha habido un error al conectar a " . $bd;
    }
?>