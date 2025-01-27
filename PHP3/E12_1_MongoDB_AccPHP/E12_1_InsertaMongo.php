<?php
  require_once "./E12_1_ConectaMongo.php";
  if ($bd) {
    $usuarios = $bd->usuarios;
    $resultado = $usuarios->insertOne(
      [
        "nombre_usuario" => "Frank_blog",
        "nombre" => "Peter",
        "cuenta_twitter" => "Frank_USA",
        "descripcion" => "blogger aficionado",
        "telefono1" => "73128989",
        "telefono2" => "11111111",
        "calle" => "Av. de los Castros",
        "numero" => "2256",
        "cp" => "39005",
        "ciudad" => "Santander"
      ]
    );
    echo "<br>Usuario insertado con el ID: " . $resultado->getInsertedId();
  }
?>