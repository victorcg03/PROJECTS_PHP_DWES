<?php
// Parámetros de conexión
$host = "localhost"; // o la IP del servidor
$dbname = "desaparecidos"; // nombre de la base de datos
$username = "root"; // usuario de la base de datos
$password = ""; // contraseña de la base de datos

try {
    // Crear una nueva conexión PDO
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Configurar PDO para que lance excepciones en caso de error
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //echo "Conexión exitosa"; // Mensaje opcional
} catch (PDOException $e) {
    // Manejo de errores en caso de fallo en la conexión
    echo "Error de conexión: " . $e->getMessage();
}
?>
