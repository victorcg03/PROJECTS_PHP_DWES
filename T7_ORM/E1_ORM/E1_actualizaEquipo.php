<?php
  require_once '../bootstrap.php';
  use App\Entity\Equipo;
  $id = 3;
  $nuevoNombre = "NomEqModif";
  $nuevosSocios = 12000;
  try {
    $equipo = $entityManager->find(Equipo::class, $id);
    if ($equipo === null) {
      echo "No se encontró el equipo con ID: $id\n";
      exit(1);
    }
    echo "Datos actuales del equipo:\n";
    echo "Nombre: " . $equipo->getNombre() . "\n";
    echo "Socios: " . $equipo->getSocios() . "\n";
    $equipo->setNombre($nuevoNombre);
    $equipo->setSocios($nuevosSocios);
    $entityManager->flush();
    echo "¡Equipo actualizado exitosamente!\n";
    echo "Datos actualizados del equipo:\n";
    echo "Nombre: " . $equipo->getNombre() . "\n";
    echo "Socios: " . $equipo->getSocios() . "\n";
  } catch (Exception $e) {
    echo "Error al modificar el equipo: " . $e->getMessage() . "\n";
  }
?>