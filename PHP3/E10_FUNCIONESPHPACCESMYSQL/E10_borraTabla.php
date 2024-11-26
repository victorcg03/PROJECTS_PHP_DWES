<?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $bd = "clientesdb_dwes";
        $conexion = mysqli_connect($host, $user, $password, $bd);
        if ($conexion) {
            echo "Borrando tabla.... <br>";
            $sentenciaSQL = "DROP TABLE articulo2";
            echo $sentenciaSQL . "<br>";
            if(mysqli_query($conexion, $sentenciaSQL)){
                echo "Tabla borrada correctamente <br>";
            }
            mysqli_close($conexion);
        } else {
            echo "Ha habido un problema al conectar a la bd";
        }
?>