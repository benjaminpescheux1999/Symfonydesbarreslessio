<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auteur
 *
 * @ORM\Table(name="auteur")
 * @ORM\Entity
 */
class Auteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_auteur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo_auteur", type="string", length=100, nullable=false)
     */
    private $pseudoAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp_auteur", type="string", length=50, nullable=false)
     */
    private $mdpAuteur = '';

    /**
     * @var string
     *
     * @ORM\Column(name="img_auteur", type="string", length=100, nullable=false, options={"default"="personne.png"})
     */
    private $imgAuteur = 'personne.png';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_auteur", type="string", length=100, nullable=true)
     */
    private $nomAuteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pre_auteur", type="string", length=100, nullable=true)
     */
    private $preAuteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rue_auteur", type="string", length=200, nullable=true)
     */
    private $rueAuteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cp_auteur", type="string", length=5, nullable=true)
     */
    private $cpAuteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville_auteur", type="string", length=255, nullable=true)
     */
    private $villeAuteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel_auteur", type="string", length=10, nullable=true)
     */
    private $telAuteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_auteur", type="string", length=100, nullable=true)
     */
    private $emailAuteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descriptif", type="text", length=65535, nullable=true)
     */
    private $descriptif;

    public function getIdAuteur(): ?int
    {
        return $this->idAuteur;
    }

    public function getPseudoAuteur(): ?string
    {
        return $this->pseudoAuteur;
    }

    public function setPseudoAuteur(string $pseudoAuteur): self
    {
        $this->pseudoAuteur = $pseudoAuteur;

        return $this;
    }

    public function getMdpAuteur(): ?string
    {
        return $this->mdpAuteur;
    }

    public function setMdpAuteur(string $mdpAuteur): self
    {
        $this->mdpAuteur = $mdpAuteur;

        return $this;
    }

    public function getImgAuteur(): ?string
    {
        return $this->imgAuteur;
    }

    public function setImgAuteur(string $imgAuteur): self
    {
        $this->imgAuteur = $imgAuteur;

        return $this;
    }

    public function getNomAuteur(): ?string
    {
        return $this->nomAuteur;
    }

    public function setNomAuteur(?string $nomAuteur): self
    {
        $this->nomAuteur = $nomAuteur;

        return $this;
    }

    public function getPreAuteur(): ?string
    {
        return $this->preAuteur;
    }

    public function setPreAuteur(?string $preAuteur): self
    {
        $this->preAuteur = $preAuteur;

        return $this;
    }

    public function getRueAuteur(): ?string
    {
        return $this->rueAuteur;
    }

    public function setRueAuteur(?string $rueAuteur): self
    {
        $this->rueAuteur = $rueAuteur;

        return $this;
    }

    public function getCpAuteur(): ?string
    {
        return $this->cpAuteur;
    }

    public function setCpAuteur(?string $cpAuteur): self
    {
        $this->cpAuteur = $cpAuteur;

        return $this;
    }

    public function getVilleAuteur(): ?string
    {
        return $this->villeAuteur;
    }

    public function setVilleAuteur(?string $villeAuteur): self
    {
        $this->villeAuteur = $villeAuteur;

        return $this;
    }

    public function getTelAuteur(): ?string
    {
        return $this->telAuteur;
    }

    public function setTelAuteur(?string $telAuteur): self
    {
        $this->telAuteur = $telAuteur;

        return $this;
    }

    public function getEmailAuteur(): ?string
    {
        return $this->emailAuteur;
    }

    public function setEmailAuteur(?string $emailAuteur): self
    {
        $this->emailAuteur = $emailAuteur;

        return $this;
    }

    public function getDescriptif(): ?string
    {
        return $this->descriptif;
    }

    public function setDescriptif(?string $descriptif): self
    {
        $this->descriptif = $descriptif;

        return $this;
    }


}
