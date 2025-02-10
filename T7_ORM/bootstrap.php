<?php
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\DriverManager;
require_once __DIR__ . '/vendor/autoload.php';
$paths = [__DIR__ . '/src/Entity'];
$isDevMode = true;
$config = ORMSetup::createAttributeMetadataConfiguration($paths, $isDevMode);
$connectionParams = [
  'dbname' => 'doctrine_dwes',
  'user' => 'root',
  'password' => '',
  'host' => '127.0.0.1',
  'driver' => 'pdo_mysql',
];
$connection = DriverManager::getConnection($connectionParams, $config);
if($connection){
  echo "Conexión establecida\n";
}
$entityManager = new EntityManager($connection, $config);
if($entityManager){
  echo "Entidad creada\n";
}
?>