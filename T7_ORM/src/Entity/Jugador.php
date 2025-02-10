<?php
  namespace App\Entity;
  use Doctrine\ORM\Mapping as ORM;
  #[ORM\Entity]
  #[ORM\Table(name: 'Jugador')]
  class Jugador {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;
    #[ORM\Column(type: 'string', length: 50)]
    private ?string $nombre = null;
    #[ORM\Column(type: 'string', length: 50)]
    private ?string $apellidos = null;
    #[ORM\Column(type: 'integer')]
    private ?int $edad = null;
    #[ORM\Column(type: 'string', length: 50)]
    private ?string $equipo = null;
    public function getId(): ?int {
      return $this->id;
    }
    public function getNombre(): ?string {
      return $this->nombre;
    }
    public function setNombre(string $nombre): self {
      $this->nombre = $nombre;
      return $this;
    }
    public function getApellidos(): ?string {
      return $this->apellidos;
    }
    public function setApellidos(string $apellidos): self {
      $this->apellidos = $apellidos;
      return $this;
    }
    public function getEdad(): ?int {
      return $this->edad;
    }
    public function setEdad(int $edad): self {
      $this->edad = $edad;
      return $this;
    }
    public function getEquipo(): ?string {
      return $this->equipo;
    }
    public function setEquipo(string $equipo): self {
      $this->equipo = $equipo;
      return $this;
    }
  }
?>