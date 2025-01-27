<?php
  require_once "./E12_1_ConectaMongo.php";
  if ($bd) {
    $usuarios = $bd->usuarios;
    $usuariosEncontrados = $usuarios->find();
    foreach ($usuariosEncontrados as $usuario) {
      print_r($usuario);
      echo "<br>";
    }
  }
?>