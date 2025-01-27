<?php
  require_once "./E12_1_ConectaMongo.php";
  if ($bd) {
    $coleccion = $bd->createCollection("userblog2");
    echo "Colección creada <br> Respuesta: ";
    print_r($coleccion);
  }
?>