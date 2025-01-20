<?php
  $archivoXML = "peliculas.xml";
  $datos = @simplexml_load_file($archivoXML);
  if (!$datos) {
    echo "Error al leer el fichero";
  } else {
    print_r($datos);
  }