<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SortieRepository")
 */
class Sortie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="sorties")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Site", inversedBy="sorties")
     * @ORM\JoinColumn(nullable=false)
     */
    private $site;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Prise", mappedBy="sortie", orphanRemoval=true)
     */
    private $prises;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\SortieComment", mappedBy="sortie", orphanRemoval=true)
     * @ORM\OrderBy({"createdAt"= "DESC"})
     */
    private $sortieComments;

    public function __construct()
    {
        $this->prises = new ArrayCollection();
        $this->sortieComments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

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
            $prise->setSortie($this);
        }

        return $this;
    }

    public function removePrise(Prise $prise): self
    {
        if ($this->prises->contains($prise)) {
            $this->prises->removeElement($prise);
            // set the owning side to null (unless already changed)
            if ($prise->getSortie() === $this) {
                $prise->setSortie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|SortieComment[]
     */
    public function getSortieComments(): Collection
    {
        return $this->sortieComments;
    }

    public function addSortieComment(SortieComment $sortieComment): self
    {
        if (!$this->sortieComments->contains($sortieComment)) {
            $this->sortieComments[] = $sortieComment;
            $sortieComment->setSortie($this);
        }

        return $this;
    }

    public function removeSortieComment(SortieComment $sortieComment): self
    {
        if ($this->sortieComments->contains($sortieComment)) {
            $this->sortieComments->removeElement($sortieComment);
            // set the owning side to null (unless already changed)
            if ($sortieComment->getSortie() === $this) {
                $sortieComment->setSortie(null);
            }
        }

        return $this;
    }
}
