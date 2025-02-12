<?php
require_once '../bootstrap.php';

use App\Entity\EquipoM1_uni;

try {
  $equipos = $entityManager
                       ->getRepository(EquipoM1_uni::class)
                       ->findAll();
} catch (Exception $e) {
  echo "Error al obtener los equipos: " . $e->getMessage() . "\n";
  exit(1);
}
if ($equipos != null && count($equipos) > 0) {
  echo "Equipos encontrados: \n";
  foreach ($equipos as $equipo) {
    echo "ID: " . $equipo->getId() . ", Nombre: " . $equipo->getNombre() . ", Fundación: " . $equipo->getFundacion() . ", Socios: " . $equipo->getSocios() . ", Ciudad: " . $equipo->getCiudad() . "\n";
  }
} else {
  echo "No se han encontrado equipos\n";
}
