<?php
  require_once "./E12_1_ConectaMongo.php";
  if ($bd) {
    $usuarios = $bd->usuarios;
    $usuariosEncontrados = $usuarios->find(['cp' => ['$gte' => "39006"]], ['projection' => ["_id" => 0, "nombre_usuario" => 1, "cuenta_twitter" => 1]]);
    foreach ($usuariosEncontrados as $usuario) {
      print_r($usuario);
      echo "<br>";
    }
  }
