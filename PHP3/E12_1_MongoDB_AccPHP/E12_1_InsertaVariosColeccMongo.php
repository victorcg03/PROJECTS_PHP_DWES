<?php
require_once "./E12_1_ConectaMongo.php";
if ($bd) {
  $coleccion = $bd->userblog2;
  $res = $coleccion->insertMany([
    [
      "nombre_usuario" => "Frank_blog",
      "nombre" => "Peter",
      "cuenta_twitter" => "Frank_USA",
      "descripcion" => "blogger aficionado",
      "telefono" => ["73128989", "11111111"],
      "direccion" => [
        "calle" => "Av. de los Castros",
        "numero" => "2256",
        "cp" => "39005",
        "ciudad" => "Santander"
      ]
    ],
    [
      "nombre_usuario" => "Peter_blog",
      "nombre" => "Peter",
      "cuenta_twitter" => "Pete",
      "descripcion" => "blogger aficionado",
      "telefono" => ["808080", "4324424"],
      "direccion" => [
      "calle" => "Av. de los Castros",
      "numero" => "289s",
      "cp" => "39005",
      "ciudad" => "Santander"
      ]
    ]
  ]);
  echo "Documentos insertados: " . $res->getInsertedCount();
  $ids = $res->getInsertedIds();
  foreach ($ids as $id) {
    echo "<br>Usuario insertado con el ID: " . $id;
  }
}
