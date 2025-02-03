<?php
  $cat1 = array("id" => 1, "nombre" => "Comida");
  $cat2 = array("id" => 2, "nombre" => "Bebida");
  $array = array($cat1, $cat2);
  echo json_encode($array);
?>