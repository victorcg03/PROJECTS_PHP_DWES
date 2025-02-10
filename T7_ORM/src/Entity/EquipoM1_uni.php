<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'equipo')]
class EquipoM1_uni
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int $id;

    #[ORM\Column(type: 'string', length: 50)]
    private string $nombre;

    #[ORM\Column(type: 'integer')]
    private int $socios;

    #[ORM\Column(type: 'integer')]
    private int $fundacion;

    #[ORM\Column(type: 'string', length: 10)]
    private string $ciudad;

    // Getters y Setters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getSocios(): ?int
    {
        return $this->socios;
    }

    public function setSocios(int $socios): self
    {
        $this->socios = $socios;
        return $this;
    }

    public function getFundacion(): ?int
    {
        return $this->fundacion;
    }

    public function setFundacion(int $fundacion): self
    {
        $this->fundacion = $fundacion;
        return $this;
    }

    public function getCiudad(): ?string
    {
        return $this->ciudad;
    }

    public function setCiudad(string $ciudad): self
    {
        $this->ciudad = $ciudad;
        return $this;
    }
}
?>
