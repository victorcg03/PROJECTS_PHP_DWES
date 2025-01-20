<?php
    $archivoXML = "peliculas.xml";
    $datos = @simplexml_load_file($archivoXML);
    if (!$datos) {
      echo "Error al leer el fichero";
    } else {
      $personajeEncontrado = null;
      $actorBuscar = "La Actora";
      foreach ($datos as $pelicula) {
        foreach ($pelicula->personajes->personaje as $personaje) {
          if($personaje->actor == $actorBuscar){
            $personajeEncontrado = $personaje;
          }
        }
      }
      if($personajeEncontrado){
        echo '<h1>Información sobre el actor "' . $actorBuscar . '"</h1>';
        echo "<p>Nombre del Personaje: " . $personajeEncontrado->nombre . "</p>";
        echo "<p>Actor: " . $personajeEncontrado->actor . "</p>";
      } else {
        echo 'El actor "' . $actorBuscar . '" no se encontró';
      }
    }
?>