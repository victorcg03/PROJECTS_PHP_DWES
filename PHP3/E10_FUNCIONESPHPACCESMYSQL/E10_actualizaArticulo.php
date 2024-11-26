<?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $bd = "clientesdb_dwes";
        $conexion = mysqli_connect($host, $user, $password, $bd);
        if ($conexion) {
            echo "Relizando la actualización.... <br>";
            $sentenciaSQL = "UPDATE articulo SET Descripcion='LinternaModif', Precio='20', Stock='26' WHERE idArticulo=1";
            echo $sentenciaSQL . "<br>";
            mysqli_query($conexion, $sentenciaSQL);
            echo "Filas afectadas: " . mysqli_affected_rows($conexion);
            mysqli_close($conexion);
        } else {
            echo "Ha habido un problema al conectar a la bd";
        }
?>