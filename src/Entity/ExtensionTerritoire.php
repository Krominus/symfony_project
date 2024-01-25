<?php

namespace App\Entity;

use App\Repository\ExtensionTerritoireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExtensionTerritoireRepository::class)]
class ExtensionTerritoire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\OneToOne(mappedBy: 'extensionTerritoire', cascade: ['persist', 'remove'])]
    private ?Personnage $personnage = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPersonnage(): ?Personnage
    {
        return $this->personnage;
    }

    public function setPersonnage(?Personnage $personnage): static
    {
        // unset the owning side of the relation if necessary
        if ($personnage === null && $this->personnage !== null) {
            $this->personnage->setExtensionTerritoire(null);
        }

        // set the owning side of the relation if necessary
        if ($personnage !== null && $personnage->getExtensionTerritoire() !== $this) {
            $personnage->setExtensionTerritoire($this);
        }

        $this->personnage = $personnage;

        return $this;
    }
}
