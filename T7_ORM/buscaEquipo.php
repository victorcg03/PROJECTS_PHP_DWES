<?php
  require_once __DIR__ . '/bootstrap.php';
  use App\Entity\Equipo;
  $id = 4;
  try {
    $equipo = $entityManager->find(Equipo::class, $id);
    if ($equipo === null) {
      echo "No se encontró el equipo con ID: $id\n";
      exit(1);
    }
    echo "ID: " . $equipo->getId() . "\n";
    echo "Nombre: " . $equipo->getNombre() . "\n";
    echo "Ciudad: " . $equipo->getCiudad() . "\n";
    echo "Socios: " . $equipo->getSocios() . "\n";
    echo "Fundación: " . $equipo->getFundacion() . "\n";
  } catch (Exception $e) {
    echo "Error al buscar el equipo: " . $e->getMessage() . "\n";
  }
?>