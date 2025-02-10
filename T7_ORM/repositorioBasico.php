<?php
  require_once __DIR__ . '/bootstrap.php';
  use App\Entity\JugadorM1_uni;
  use App\Entity\EquipoM1_uni;
  try {
    echo "Jugadores con 22 años \n";
    $jugadores = $entityManager
                 ->getRepository(JugadorM1_uni::class)
                 ->findBy(['edad' => 22]);
    foreach ($jugadores as $jugador) {
      echo "Nombre: " . $jugador->getNombre() . 
           " " . $jugador->getApellidos() . "\n";
    }
    echo "Equipos Ciudad2 fundados en 1902\n";
    $equipos = $entityManager
               ->getRepository(EquipoM1_uni::class)
               ->findBy(['fundacion' => 1902,
                                   'ciudad' => 'Ciudad2']);
    foreach ($equipos as $equipo) {
      echo "Nombre: " . $equipo->getNombre() . "\n";
    }
    echo "Todos los equipos registrados \n";
    $todosLosEquipos = $entityManager
                       ->getRepository(EquipoM1_uni::class)
                       ->findAll();
    foreach ($todosLosEquipos as $equipo) {
      echo "ID: " . $equipo->getId() . 
           " | Nombre: " . $equipo->getNombre() .
           " | Fundación: " . $equipo->getFundacion() .
           " | Ciudad: " . $equipo->getCiudad() . "\n";
    }
  } catch (Exception $e) {
    echo "Error al consultar los jugadores: " . $e->getMessage() . "\n";
  }