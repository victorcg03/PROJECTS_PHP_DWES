<?php
  require_once '../bootstrap.php';
  use App\Entity\Equipo;
  $nombre = "Equipo5";
  $socios = 5000;
  $fundacion = 1905;
  $ciudad = 'Ciudad5';
  try {
    $equipo = new Equipo();
    $equipo->setNombre($nombre);
    $equipo->setSocios($socios);
    $equipo->setFundacion($fundacion);
    $equipo->setCiudad($ciudad);fundacion: 
    $entityManager->persist($equipo);
    $entityManager->flush();
    echo "¡Equipo insertado con éxito! ID: " . $equipo->getId() . "\n";
  } catch (Exception $e) {
    echo "Error al insertar el equipo: " . $e->getMessage() . "\n";
  }
?>