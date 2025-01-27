<?php
  $Fich_autoloadPhp = "../vendor/autoload.php";
  require_once $Fich_autoloadPhp;
  try{
    $cadenaConexion = "mongodb://localhost:27017";
    $cliente = new MongoDB\Client($cadenaConexion);
    $bd = $cliente->libroservidor;
    echo "Conectado <br>";
    echo "alumnos 'Willt Smith'?.?<br>";
    $usuarios = $bd->usuarios->find(['alumno' => 'Willt Smith']);
    foreach ($usuarios as $usuario) {
      var_dump($usuario);
    }
  } catch (Exception $e) {
    print ($e);
  }
?>