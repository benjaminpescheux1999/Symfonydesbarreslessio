<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="id_auteur", columns={"id_auteur"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_commande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dated_commande", type="date", nullable=false)
     */
    private $datedCommande;

    /**
     * @var float|null
     *
     * @ORM\Column(name="tot_commande", type="float", precision=10, scale=0, nullable=true)
     */
    private $totCommande;

    /**
     * @var \Auteur
     *
     * @ORM\ManyToOne(targetEntity="Auteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_auteur", referencedColumnName="id_auteur")
     * })
     */
    private $idAuteur;

    public function getIdCommande(): ?int
    {
        return $this->idCommande;
    }

    public function getDatedCommande(): ?\DateTimeInterface
    {
        return $this->datedCommande;
    }

    public function setDatedCommande(\DateTimeInterface $datedCommande): self
    {
        $this->datedCommande = $datedCommande;

        return $this;
    }

    public function getTotCommande(): ?float
    {
        return $this->totCommande;
    }

    public function setTotCommande(?float $totCommande): self
    {
        $this->totCommande = $totCommande;

        return $this;
    }

    public function getIdAuteur(): ?Auteur
    {
        return $this->idAuteur;
    }

    public function setIdAuteur(?Auteur $idAuteur): self
    {
        $this->idAuteur = $idAuteur;

        return $this;
    }


}
