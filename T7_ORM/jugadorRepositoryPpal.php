<?php
  require_once __DIR__ . '/bootstrap.php';
  use App\Entity\JugadorM1_uni;
  try {
    $jugadorRepo = $entityManager->getRepository(JugadorM1_uni::class);
    echo "Jugadores con 22 años: \n";
    $jugadores = $jugadorRepo->findByEdad(22);
    foreach ($jugadores as $jugador) {
      echo "Nombre: " . $jugador->getNombre() . 
           " " . $jugador->getApellidos() . "\n";
    }
  } catch (Exception $e) {
    echo "Error al consultar los jugadores: " . $e->getMessage() . "\n";
  }
?>