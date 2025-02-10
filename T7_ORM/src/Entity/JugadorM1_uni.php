<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'jugador')]
class JugadorM1_uni
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int $id;

    #[ORM\Column(type: 'string', length: 50)]
    private string $nombre;

    #[ORM\Column(type: 'string', length: 50)]
    private string $apellidos;

    #[ORM\Column(type: 'integer')]
    private int $edad;

    #[ORM\ManyToOne(targetEntity: EquipoM1_uni::class)]
    #[ORM\JoinColumn(name: 'id_Equipo', referencedColumnName: 'id', nullable: false)]
    private EquipoM1_uni $equipo;

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

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): self
    {
        $this->apellidos = $apellidos;
        return $this;
    }

    public function getEdad(): ?int
    {
        return $this->edad;
    }

    public function setEdad(int $edad): self
    {
        $this->edad = $edad;
        return $this;
    }

    public function getEquipo(): ?EquipoM1_uni
    {
        return $this->equipo;
    }

    public function setEquipo(EquipoM1_uni $equipo): self
    {
        $this->equipo = $equipo;
        return $this;
    }
}
?>
