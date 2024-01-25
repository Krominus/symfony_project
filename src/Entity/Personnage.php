<?php

namespace App\Entity;

use App\Repository\PersonnageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonnageRepository::class)]
class Personnage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\OneToMany(mappedBy: 'personnages', targetEntity: Technique::class)]
    private Collection $technique;

    #[ORM\OneToOne(inversedBy: 'personnage', cascade: ['persist', 'remove'])]
    private ?ExtensionTerritoire $extensionTerritoire = null;

    #[ORM\ManyToOne(inversedBy: 'personnages')]
    private ?Allie $allie = null;

    #[ORM\ManyToMany(targetEntity: Ennemi::class, mappedBy: 'personnages')]
    private Collection $ennemis;

    public function __construct()
    {
        $this->technique = new ArrayCollection();
        $this->ennemis = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return Collection<int, Technique>
     */
    public function getTechnique(): Collection
    {
        return $this->technique;
    }

    public function addTechnique(Technique $technique): static
    {
        if (!$this->technique->contains($technique)) {
            $this->technique->add($technique);
            $technique->setPersonnages($this);
        }

        return $this;
    }

    public function removeTechnique(Technique $technique): static
    {
        if ($this->technique->removeElement($technique)) {
            // set the owning side to null (unless already changed)
            if ($technique->getPersonnages() === $this) {
                $technique->setPersonnages(null);
            }
        }

        return $this;
    }

    public function getExtensionTerritoire(): ?ExtensionTerritoire
    {
        return $this->extensionTerritoire;
    }

    public function setExtensionTerritoire(?ExtensionTerritoire $extensionTerritoire): static
    {
        $this->extensionTerritoire = $extensionTerritoire;

        return $this;
    }

    public function getAllie(): ?Allie
    {
        return $this->allie;
    }

    public function setAllie(?Allie $allie): static
    {
        $this->allie = $allie;

        return $this;
    }

    /**
     * @return Collection<int, Ennemi>
     */
    public function getEnnemis(): Collection
    {
        return $this->ennemis;
    }

    public function addEnnemi(Ennemi $ennemi): static
    {
        if (!$this->ennemis->contains($ennemi)) {
            $this->ennemis->add($ennemi);
            $ennemi->addPersonnage($this);
        }

        return $this;
    }

    public function removeEnnemi(Ennemi $ennemi): static
    {
        if ($this->ennemis->removeElement($ennemi)) {
            $ennemi->removePersonnage($this);
        }

        return $this;
    }
}
