<?php
  $a[1] = "Ana";
  $a[2] = "Belén";
  $a[3] = "Carmen";
  $a[4] = "Daniel";

  $q = $_GET["q"];
  $resultado = "";
  if ($q !== "") {
    $q = strtolower($q);
    $tam = strlen($q);
    foreach($a as $nombre) {
      if (stristr($q, substr($nombre, 0, $tam))) {
        if ($resultado === "") {
          $resultado = "<p>" . $nombre . "</p>";
        } else {
          $resultado .= "<p>" . $nombre . "</p>";
        }
      }
    }
  }
  if ($resultado === "") {
    echo "no existen coincidendias ";
  } else {
    echo $resultado;
  }
?>