<?php
    $hostname = "localhost";
    $usuario = "root";
    $password = "";
    $bdd = "clientesdb_dwes";
    $cadenaConexion = "mysql:host=$hostname;dbname=$bdd;";
    $conexion = null;
    try{
        $conexion = new PDO($cadenaConexion, $usuario, $password);
        echo "Conexion Exitosa a BBDD $bdd <br><br>";
    } catch (PDOException $e) {
        echo "Error al conectarse a $bdd: ".  $e->getMessage();
        $conexion = null;
    }
?>