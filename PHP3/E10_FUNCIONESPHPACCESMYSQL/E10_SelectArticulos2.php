<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $bd = "clientesdb_dwes";

    $conexion = mysqli_connect($host, $user, $password, $bd);
    if ($conexion) {
        $sentenciaSQL = "SELECT * FROM ARTICULO";
        $resultado = mysqli_query($conexion, $sentenciaSQL);
        echo "Filas afectadas: " . mysqli_affected_rows($conexion) . "<br><br><br>";
        $filas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        foreach ($filas as $fila) {
            echo "Id: " . $fila['idArticulo'] . "<br>";
            echo "Descripción: " . $fila['Descripcion'] . "<br>";
            echo "Precio: " . $fila['Precio'] . "<br>";
            echo "Stock: " . $fila['Stock'] . "<br>";
            echo "<br>";
        }
        mysqli_close($conexion);
    } else {
        echo "Ha habido un error al conectar a " . $bd;
    }
?>