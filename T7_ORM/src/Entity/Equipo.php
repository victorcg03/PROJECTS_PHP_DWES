<?php
  namespace App\Entity;
  use Doctrine\ORM\Mapping as ORM;
  #[ORM\Entity]
  #[ORM\Table(name: 'Equipo')]
  class Equipo {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;
    #[ORM\Column(type: 'string', length: 50)]
    private ?string $nombre = null;
    #[ORM\Column(type: 'integer')]
    private ?int $socios = null;
    #[ORM\Column(type: 'integer')]
    private ?int $fundacion = null;
    #[ORM\Column(type: 'string', length: 50)]
    private ?string $ciudad = null;
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
    public function getSocios(): ?int {
    return $this->socios;
  }
  public function setSocios(int $socios): self {
    $this->socios = $socios;
    return $this;
  }
  public function getFundacion(): ?int {
    return $this->fundacion;
  }
  public function setFundacion(int $fundacion): self {
    $this->fundacion = $fundacion;
    return $this;
  }
  public function getCiudad(): ?string {
    return $this->ciudad;
  }
  public function setCiudad(string $ciudad): self {
    $this->ciudad = $ciudad;
    return $this;
  }
}
  ?>