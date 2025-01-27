<?php
  require_once "./E12_1_ConectaMongo.php";
  if ($bd) {
    $usuarios = $bd->usuarios;
    $resultado = $usuarios->deleteOne(["nombre_usuario" => "Frank_blog"]);
    echo "<br>Usuarios borrados:" . $resultado->getDeletedCount();
  }
?>