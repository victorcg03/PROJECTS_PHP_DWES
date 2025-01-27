<?php
  require '../vendor/autoload.php';

  try {
      $cadenaConexion = 'mongodb://127.0.0.1:27017/';
      
      $cliente = new MongoDB\Client($cadenaConexion);
      $bd = $cliente->libroservidor;
      echo 'Conectado <br>';
      
      // Selecciona la colección llamada "usuarios" de la BD "libroservidor"
      $usuarios = $bd->usuarios;
      
      // Inserta un nuevo usuario en la colección
      $usuarios->insertOne([
          "_id" => "123",
          "usuario" => "antonio",
          "edad" => "27",
          "fechaInscripcion" => "2024-12-20"
      ]);
      
      // Lee todos los documentos de la colección
      $cursor = $usuarios->find()->toArray();
      
      // Recorre el array de documentos
      foreach ($cursor as $usuario) {
          var_dump($usuario);
          //print_r($usuario);
      }
  } catch (Exception $e) {
      print($e);
  }
  
?>