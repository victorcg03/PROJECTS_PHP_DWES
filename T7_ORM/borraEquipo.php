<?php
  require_once __DIR__ . '/bootstrap.php';
  use App\Entity\Equipo;
  $id = 5;
  try {
    $equipo = $entityManager->find(Equipo::class, $id);
    if ($equipo === null) {
      echo "No se encontró el equipo con ID: $id\n";
      exit(1);
    }
    $entityManager->remove($equipo);
    $entityManager->flush();
    echo "¡Equipo con ID $id eliminado con éxito \n";
  } catch (Exception $e) {
    echo "Error al eliminar el equipo: " . $e->getMessage() . "\n";
  } 
?>