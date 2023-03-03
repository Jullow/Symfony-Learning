<?php

namespace App\Entity\Trait;

use Doctrine\ORM\Mapping as ORM;

trait CreatedAtTrait
{

    #[ORM\Column]
    private ?\DateTimeImmutable $createdat = null;

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdat;
    }

    public function setCreatedAt(\DateTimeImmutable $createdat): self
    {
        $this->createdat = $createdat;

        return $this;
    }
}
