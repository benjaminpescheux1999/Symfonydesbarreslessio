<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lcommande
 *
 * @ORM\Table(name="lcommande")
 * @ORM\Entity
 */
class Lcommande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_commande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCommande;

    /**
     * @var int
     *
     * @ORM\Column(name="id_blague", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idBlague;

    /**
     * @var int
     *
     * @ORM\Column(name="qtit_lcommande", type="integer", nullable=false, options={"default"="1"})
     */
    private $qtitLcommande = '1';

    public function getIdCommande(): ?int
    {
        return $this->idCommande;
    }

    public function getIdBlague(): ?int
    {
        return $this->idBlague;
    }

    public function getQtitLcommande(): ?int
    {
        return $this->qtitLcommande;
    }

    public function setQtitLcommande(int $qtitLcommande): self
    {
        $this->qtitLcommande = $qtitLcommande;

        return $this;
    }


}
