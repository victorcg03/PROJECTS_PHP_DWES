<?php
  $archivoXML = "peliculas.xml";
  $datos = @simplexml_load_file($archivoXML);
  if (!$datos) {
    echo "Error al leer el fichero";
  } else {
    $personajes = $datos->xpath("//personaje");
    echo "<h1>Personajes de la Película</h1>";
    foreach ($personajes as $personaje) {
      echo "<strong>Nombre</strong>: " . $personaje->nombre;
      echo "<br><strong>Actor</strong>: " . $personaje->actor;
      echo "<br><br>";
    }
  }
?>
