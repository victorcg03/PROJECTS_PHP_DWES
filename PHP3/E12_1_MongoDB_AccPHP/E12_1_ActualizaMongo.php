<?php

use MongoDB\Operation\UpdateOne;

  require_once "./E12_1_ConectaMongo.php";
  if ($bd) {
    $usuarios = $bd->usuarios;
    $resultado = $usuarios->UpdateOne(["cp" => "39006"],['$set' => ["nombre_usuario" => "nombre_cambiadoo"]]);
    echo "<br>Usuarios actualizados:" . $resultado->getModifiedCount();
  }
?>