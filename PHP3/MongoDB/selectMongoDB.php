<?php
  $Fich_autoloadPhp = "../vendor/autoload.php";
  require_once $Fich_autoloadPhp;
  try{
    $cadenaConexion = "mongodb://localhost:27017";
    $cliente = new MongoDB\Client($cadenaConexion);
    $bd = $cliente->libroservidor;
    echo "Conectado <br>";
    echo "Todos los usuarios <br>";
    $usuarios = $bd->usuarios->find();
    foreach ($usuarios as $usuario) {
      print_r($usuario);
    }
  } catch (Exception $e) {
    print ($e);
  }
