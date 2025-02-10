<?php
  require_once __DIR__ . '/bootstrap.php';
  use App\Entity\Equipo;
  $id = 4;
  $nuevoNombre = "Nombre12";
  $nuevaCiudad = "Ciudad12";
  $nuevosSocios = 12000;
  $nuevaFundacion = 1912;
  try {
    $equipo = $entityManager->find(Equipo::class, $id);
    if ($equipo === null) {
      echo "No se encontró el equipo con ID: $id\n";
      exit(1);
    }
    $equipo->setNombre($nuevoNombre);
    $equipo->setCiudad($nuevaCiudad);
    $equipo->setSocios($nuevosSocios);
    $equipo->setFundacion($nuevaFundacion);
    $entityManager->flush();
    echo "¡Equipo modificado con éxito! ID: " . $equipo->getId() . "\n";
  } catch (Exception $e) {
    echo "Error al modificar el equipo: " . $e->getMessage() . "\n";
  }
?>