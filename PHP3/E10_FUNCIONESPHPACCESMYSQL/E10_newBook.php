<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['isbn']) && !empty($_POST['author']) && !empty($_POST['title']) && !empty($_POST['price'])) {
        $host = "localhost";
        $user = "root";
        $password = "";
        $bd = "bookorama";
    
        $conexion = mysqli_connect($host, $user, $password, $bd);
        if ($conexion) {
            echo "Conexión a BD exitosa <br>";
            $sentenciaPreparada = "INSERT INTO books VALUES (?, ? , ?, ?)";
            $sentencia = mysqli_prepare($conexion, $sentenciaPreparada);
            mysqli_stmt_bind_param($sentencia, "sssd", $_POST['isbn'], $_POST['author'], $_POST['title'], $_POST['price']);
            $resultado = mysqli_stmt_execute($sentencia);
            if ($resultado){
                echo "Registros insertados: " . mysqli_affected_rows($conexion);
                mysqli_stmt_close($sentencia);
            }
            mysqli_close($conexion);
        } else {
            echo "Ha habido un error al conectar a " . $bd;
        }
    } else {
        echo "No se han introducido todos los datos del formulario. No se procederá.";
    }

    //Los datos se guardan perfectamente en la tabla y si introduces un libro con un isbn ya existente, no te deja guardarlo.
?>