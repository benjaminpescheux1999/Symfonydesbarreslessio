<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_categorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_categorie", type="string", length=100, nullable=false)
     */
    private $libCategorie;

    /**
     * @var int
     *
     * @ORM\Column(name="id_illustration", type="integer", nullable=false)
     */
    private $idIllustration;

    public function getIdCategorie(): ?int
    {
        return $this->idCategorie;
    }

    public function getLibCategorie(): ?string
    {
        return $this->libCategorie;
    }

    public function setLibCategorie(string $libCategorie): self
    {
        $this->libCategorie = $libCategorie;

        return $this;
    }

    public function getIdIllustration(): ?int
    {
        return $this->idIllustration;
    }

    public function setIdIllustration(int $idIllustration): self
    {
        $this->idIllustration = $idIllustration;

        return $this;
    }


}
