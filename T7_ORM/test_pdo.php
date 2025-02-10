<?php
  try {
    $pdo = new PDO('mysql:host=127.0.0.1;' . 'dbname=doctrine_dwes;' . 'charset=utf8mb4', 'root', '');
    echo "Conexión a la base de datos exitosa! \n";
  } catch (PDOException $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage() . "\n";
  }
?>