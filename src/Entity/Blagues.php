<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blagues
 *
 * @ORM\Table(name="blagues", indexes={@ORM\Index(name="id_auteur", columns={"id_auteur"}), @ORM\Index(name="id_categorie", columns={"id_categorie", "id_illustration", "id_auteur"}), @ORM\Index(name="id_illustration", columns={"id_illustration"})})
 * @ORM\Entity
 */
class Blagues
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_blague", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBlague;

    /**
     * @var int
     *
     * @ORM\Column(name="id_categorie", type="integer", nullable=false)
     */
    private $idCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_blague", type="string", length=100, nullable=false)
     */
    private $titreBlague;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_blague", type="text", length=65535, nullable=false)
     */
    private $descBlague;

    /**
     * @var int
     *
     * @ORM\Column(name="id_illustration", type="integer", nullable=false)
     */
    private $idIllustration;

    /**
     * @var int
     *
     * @ORM\Column(name="id_auteur", type="integer", nullable=false)
     */
    private $idAuteur;

    /**
     * @var float|null
     *
     * @ORM\Column(name="px_blague", type="float", precision=10, scale=0, nullable=true)
     */
    private $pxBlague;

    public function getIdBlague(): ?int
    {
        return $this->idBlague;
    }

    public function getIdCategorie(): ?int
    {
        return $this->idCategorie;
    }

    public function setIdCategorie(int $idCategorie): self
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    public function getTitreBlague(): ?string
    {
        return $this->titreBlague;
    }

    public function setTitreBlague(string $titreBlague): self
    {
        $this->titreBlague = $titreBlague;

        return $this;
    }

    public function getDescBlague(): ?string
    {
        return $this->descBlague;
    }

    public function setDescBlague(string $descBlague): self
    {
        $this->descBlague = $descBlague;

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

    public function getIdAuteur(): ?int
    {
        return $this->idAuteur;
    }

    public function setIdAuteur(int $idAuteur): self
    {
        $this->idAuteur = $idAuteur;

        return $this;
    }

    public function getPxBlague(): ?float
    {
        return $this->pxBlague;
    }

    public function setPxBlague(?float $pxBlague): self
    {
        $this->pxBlague = $pxBlague;

        return $this;
    }


}
