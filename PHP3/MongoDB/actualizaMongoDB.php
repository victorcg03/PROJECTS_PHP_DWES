<?php
  require '../vendor/autoload.php';

  try {
      $cadenaConexion = 'mongodb://127.0.0.1:27017/';
      
      $cliente = new MongoDB\Client($cadenaConexion);
      $bd = $cliente->libroservidor;
      echo 'Conectado <br>';
      
      // Selecciona la colección
      $usuarios = $bd->prueba;
      
      echo 'Actualiza Usuarios' . "<br>";
      $updateResult = $bd->prueba->updateOne(
          ['firstname' => 'Nombre2'],
          ['$set' => ['lastname' => 'Salas']]
      );
  } catch (Exception $e) {
      print($e);
  }
  
?>