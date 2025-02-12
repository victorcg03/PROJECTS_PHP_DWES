<?php
  require_once '../bootstrap.php';
  use App\Entity\EquipoM1_uni;
  $id = 61;
  $equipo = $entityManager->find(EquipoM1_uni::class, $id);
  if ($equipo === null) {
    echo "No se encontró el equipo con ID: $id\n";
    exit(1);
  } else {
    echo "ID: $id\n";
    echo "Nombre: " . $equipo->getNombre() . "\n";
    echo "Fundacion: " . $equipo->getFundacion() . "\n";
    echo "Socios: " . $equipo->getSocios() . "\n";
    echo "Ciudad: " . $equipo->getCiudad() . "\n";
  }