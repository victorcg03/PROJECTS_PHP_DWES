<?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $bd = "clientesdb_dwes";
        $conexion = mysqli_connect($host, $user, $password, $bd);
        if ($conexion) {
            echo "Relizando el borrado.... <br>";
            $sentenciaSQL = "DELETE FROM articulo WHERE idArticulo=14";
            echo $sentenciaSQL . "<br>";
            mysqli_query($conexion, $sentenciaSQL);
            echo "Filas afectadas: " . mysqli_affected_rows($conexion);
            mysqli_close($conexion);
        } else {
            echo "Ha habido un problema al conectar a la bd";
        }
?>