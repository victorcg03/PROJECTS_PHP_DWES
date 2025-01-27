<?php
    $hostname = "localhost";
    $usuario = "root";
    $password = "";
    $bdd = "notasdb_dwes";
    $cadenaConexion = "mysql:host=$hostname;dbname=$bdd;";
    $conexion = null;
    try{
        $conexion = new PDO($cadenaConexion, $usuario, $password);
        echo "Conexión exitósa!<br>";
        echo "<b>BD: " . $bdd . "</b><br><br>";
    } catch (PDOException $e) {
        echo "Error al conectarse a $bdd: ".  $e->getMessage();
        $conexion = null;
    }
?>