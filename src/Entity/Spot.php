<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpotRepository")
 */
class Spot
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $gps;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Site", inversedBy="spots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $site;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Prise", mappedBy="spot")
     */
    private $prises;

    public function __construct()
    {
        $this->prises = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getGps(): ?string
    {
        return $this->gps;
    }

    public function setGps(?string $gps): self
    {
        $this->gps = $gps;

        return $this;
    }

    public function getSite(): ?Site
    {
        return $this->site;
    }

    public function setSite(?Site $site): self
    {
        $this->site = $site;

        return $this;
    }

    /**
     * @return Collection|Prise[]
     */
    public function getPrises(): Collection
    {
        return $this->prises;
    }

    public function addPrise(Prise $prise): self
    {
        if (!$this->prises->contains($prise)) {
            $this->prises[] = $prise;
            $prise->setSpot($this);
        }

        return $this;
    }

    public function removePrise(Prise $prise): self
    {
        if ($this->prises->contains($prise)) {
            $this->prises->removeElement($prise);
            // set the owning side to null (unless already changed)
            if ($prise->getSpot() === $this) {
                $prise->setSpot(null);
            }
        }

        return $this;
    }
}
