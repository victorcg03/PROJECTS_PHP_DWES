<?php
  namespace App\Repository;
  use App\Entity\JugadorM1_uni;
  use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
  use Doctrine\Persistence\ManagerRegistry;

  class JugadorRepository extends ServiceEntityRepository {
    public function __construct(ManagerRegistry $registry) {
      parent::__construct($registry, JugadorM1_uni::class);
    }
    public function findByEdad($edad){
      return $this->findBy(['edad' => $edad]);
    }
  }
?>
