<?php
  require_once "./E12_1_ConectaMongo.php";
  if ($bd) {
    $usuarios = $bd->usuarios;
    $usuariosEncontrados = $usuarios->find(["cp" => "39005"]);
    echo "Nº de usuarios encontrados: " . $usuarios->count(array("cp" => "39005")) . "<br>";
    foreach ($usuariosEncontrados as $usuario) {
      print_r($usuario);
      echo "<br>";
    }
  }
?>