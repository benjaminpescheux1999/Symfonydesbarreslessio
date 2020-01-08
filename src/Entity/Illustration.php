<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Illustration
 *
 * @ORM\Table(name="illustration")
 * @ORM\Entity
 */
class Illustration
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_illustration", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIllustration;

    /**
     * @var string
     *
     * @ORM\Column(name="img_illustration", type="string", length=200, nullable=false)
     */
    private $imgIllustration;

    public function getIdIllustration(): ?int
    {
        return $this->idIllustration;
    }

    public function getImgIllustration(): ?string
    {
        return $this->imgIllustration;
    }

    public function setImgIllustration(string $imgIllustration): self
    {
        $this->imgIllustration = $imgIllustration;

        return $this;
    }


}
