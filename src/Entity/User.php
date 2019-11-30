<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(
 * fields = {"username"},
 * message = "Ce speudo est déjà utilisé!"
 * )
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     * @Assert\Length(min="8", minMessage="Votre mot de passe doit faire au moins 8 caractères")
     */
    private $password;

    /**
    * @Assert\EqualTo(propertyPath="password", message="Vous n'avez pas tapé le même mot de passe")
    */
    public $confirm_password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Love", mappedBy="user", orphanRemoval=true)
     */
    private $loves;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Sortie", mappedBy="user", orphanRemoval=true)
     */
    private $sorties;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\SortieComment", mappedBy="user", orphanRemoval=true)
     */
    private $sortieComments;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Site", mappedBy="user")
     */
    private $sites;

    public function __construct()
    {
        $this->loves = new ArrayCollection();
        $this->sorties = new ArrayCollection();
        $this->sortieComments = new ArrayCollection();
        $this->sites = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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
            $love->setUser($this);
        }

        return $this;
    }

    public function removeLove(Love $love): self
    {
        if ($this->loves->contains($love)) {
            $this->loves->removeElement($love);
            // set the owning side to null (unless already changed)
            if ($love->getUser() === $this) {
                $love->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Sortie[]
     */
    public function getSorties(): Collection
    {
        return $this->sorties;
    }

    public function addSorty(Sortie $sorty): self
    {
        if (!$this->sorties->contains($sorty)) {
            $this->sorties[] = $sorty;
            $sorty->setUser($this);
        }

        return $this;
    }

    public function removeSorty(Sortie $sorty): self
    {
        if ($this->sorties->contains($sorty)) {
            $this->sorties->removeElement($sorty);
            // set the owning side to null (unless already changed)
            if ($sorty->getUser() === $this) {
                $sorty->setUser(null);
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
            $sortieComment->setUser($this);
        }

        return $this;
    }

    public function removeSortieComment(SortieComment $sortieComment): self
    {
        if ($this->sortieComments->contains($sortieComment)) {
            $this->sortieComments->removeElement($sortieComment);
            // set the owning side to null (unless already changed)
            if ($sortieComment->getUser() === $this) {
                $sortieComment->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Site[]
     */
    public function getSites(): Collection
    {
        return $this->sites;
    }

    public function addSite(Site $site): self
    {
        if (!$this->sites->contains($site)) {
            $this->sites[] = $site;
            $site->setUser($this);
        }

        return $this;
    }

    public function removeSite(Site $site): self
    {
        if ($this->sites->contains($site)) {
            $this->sites->removeElement($site);
            // set the owning side to null (unless already changed)
            if ($site->getUser() === $this) {
                $site->setUser(null);
            }
        }

        return $this;
    }
}
