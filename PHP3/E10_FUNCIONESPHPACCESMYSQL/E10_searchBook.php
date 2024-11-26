<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['buscar'])) {
    $host = "localhost";
    $user = "root";
    $password = "";
    $bd = "bookorama";

    $conexion = mysqli_connect($host, $user, $password, $bd);
    if ($conexion) {
        echo "Conexión a BD exitosa<br>";
        $sentencia = "SELECT * FROM books WHERE " . addslashes($_POST['tipo']) . " like '%" . addslashes(trim($_POST['buscar'])) . "%'";
        $resultado = mysqli_query($conexion, $sentencia);
        echo "Filas encontradas: " . mysqli_affected_rows($conexion) . "<br><br>";
        if (mysqli_affected_rows($conexion) > 0) {
            $filas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
            foreach ($filas as $fila) {
                echo "ISBN: " . $fila['isbn'] . "<br>";
                echo "Autor: " . $fila['author'] . "<br>";
                echo "Titulo: " . $fila['title'] . "<br>";
                echo "Precio: " . $fila['price'] . "<br>";
                echo "<br>";
            }
        } else {
            echo "No hay datos que mostrar<br>";
        }
        mysqli_close($conexion);
    } else {
        echo "Ha habido un error al conectar a " . $bd;
    }
} else {
    echo "No se han introducido los datos necesarios, no se procederá.";
}
?>