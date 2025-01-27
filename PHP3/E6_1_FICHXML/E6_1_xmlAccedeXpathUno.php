<?php
   $archivoXML = "peliculas.xml";
   $datos = @simplexml_load_file($archivoXML);
   if (!$datos) {
     echo "Error al leer el fichero";
   } else {
    $actorBuscar = "La Actora";
    $personajeEncontrado = $datos->xpath(expression: "//personaje[actor='$actorBuscar']");
    if($personajeEncontrado){
      echo '<h1>Información sobre el actor "' . $actorBuscar . '"</h1>';
      echo "<strong>Nombre:</strong> " . $personajeEncontrado[0]->nombre;
      echo "<br><strong>Actor:</strong> " . $personajeEncontrado[0]->actor;
    } else {
      echo 'El actor "' . $actorBuscar . '" no se encontró';
    }
   }
?>