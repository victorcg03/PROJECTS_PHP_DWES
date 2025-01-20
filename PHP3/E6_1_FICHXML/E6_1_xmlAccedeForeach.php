<?php
$archivoXML = "peliculas.xml";
$datos = @simplexml_load_file($archivoXML);
if (!$datos) {
  echo "Error al leer el fichero";
} else {
  foreach ($datos as $pelicula) {
?>
    <h1><?= $pelicula->titulo ?></h1>
    <h3>Personajes:</h3>
    <?php
    foreach ($pelicula->personajes->personaje as $personaje) { ?>
      Nombre del Personaje: <?= $personaje->nombre ?><br>
      Actor: <?= $personaje->actor ?></p>
    <?php
    };
    echo "<br>";
    echo "<h3>Argumento:</h3>";
    echo "<p>" . $pelicula->argumento . "</p>";
    echo "<h3>Puntuaciones</h3>";
    foreach ($pelicula->puntuacion as $puntuacion) {
      echo "<p>Tipo: " . $puntuacion["tipo"] . " - Puntuación: " . $puntuacion . "</p>";
    }
  }
}
?>