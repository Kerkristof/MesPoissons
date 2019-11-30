<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\User;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EspecesRepository")
 */
class Especes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=3, max=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $taille_min;

    /**
     * @ORM\Column(type="text")
     * @Assert\Length(min=20)
     */
    private $contenu;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="relation")
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Comment", mappedBy="espece", orphanRemoval=true)
     * @ORM\OrderBy({"createAt"= "DESC"})
     */
    private $comments;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $author;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Love", mappedBy="espece", orphanRemoval=true)
     */
    private $loves;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Prise", mappedBy="especes", orphanRemoval=true)
     */
    private $prises;

    public function __construct()
    {
        $this->loves = new ArrayCollection();
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

    public function getTailleMin(): ?int
    {
        return $this->taille_min;
    }

    public function setTailleMin(?int $taille_min): self
    {
        $this->taille_min = $taille_min;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
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

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setEspece($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->contains($comment)) {
            $this->comments->removeElement($comment);
            // set the owning side to null (unless already changed)
            if ($comment->getEspece() === $this) {
                $comment->setEspece(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
      return $this->nom;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return Collection|Love[]
     */
    public function getLoves(): Collection
    {
        return $this->loves;
    }

    public function addLove(Love $love): self
    {
        if (!$this->loves->contains($love)) {
            $this->loves[] = $love;
            $love->setEspece($this);
        }

        return $this;
    }

    public function removeLove(Love $love): self
    {
        if ($this->loves->contains($love)) {
            $this->loves->removeElement($love);
            // set the owning side to null (unless already changed)
            if ($love->getEspece() === $this) {
                $love->setEspece(null);
            }
        }

        return $this;
    }

   /**
    * Permet de savoir si cette espece est like par un utilisateur
    * @param  User $user [description]
    * @return bool       [description]
    */
    public function isLovedByUser(User $user): bool
    {
      foreach ($this->loves as $love) {
        if($love->getUser() === $user)return true;
      }
      return false;
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
            $prise->setEspeces($this);
        }

        return $this;
    }

    public function removePrise(Prise $prise): self
    {
        if ($this->prises->contains($prise)) {
            $this->prises->removeElement($prise);
            // set the owning side to null (unless already changed)
            if ($prise->getEspeces() === $this) {
                $prise->setEspeces(null);
            }
        }

        return $this;
    }
}
