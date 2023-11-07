<?php

namespace App\Entity;

use App\Repository\TbAssociationtypesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TbAssociationtypesRepository::class)]
class TbAssociationtypes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $label = null;

    #[ORM\ManyToOne]
    private ?User $createdby = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdat = null;

    #[ORM\ManyToOne]
    private ?User $modifiedby = null;

    #[ORM\OneToMany(mappedBy: 'associationtype', targetEntity: TbAssociations::class)]
    private Collection $tbAssociations;

    public function __construct()
    {
        $this->tbAssociations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getCreatedby(): ?User
    {
        return $this->createdby;
    }

    public function setCreatedby(?User $createdby): static
    {
        $this->createdby = $createdby;

        return $this;
    }

    public function getCreatedat(): ?\DateTimeInterface
    {
        return $this->createdat;
    }

    public function setCreatedat(\DateTimeInterface $createdat): static
    {
        $this->createdat = $createdat;

        return $this;
    }

    public function getModifiedby(): ?User
    {
        return $this->modifiedby;
    }

    public function setModifiedby(User $modifiedby): static
    {
        $this->modifiedby = $modifiedby;

        return $this;
    }

    /**
     * @return Collection<int, TbAssociations>
     */
    public function getTbAssociations(): Collection
    {
        return $this->tbAssociations;
    }

    public function addTbAssociation(TbAssociations $tbAssociation): static
    {
        if (!$this->tbAssociations->contains($tbAssociation)) {
            $this->tbAssociations->add($tbAssociation);
            $tbAssociation->setAssociationtype($this);
        }

        return $this;
    }

    public function removeTbAssociation(TbAssociations $tbAssociation): static
    {
        if ($this->tbAssociations->removeElement($tbAssociation)) {
            // set the owning side to null (unless already changed)
            if ($tbAssociation->getAssociationtype() === $this) {
                $tbAssociation->setAssociationtype(null);
            }
        }

        return $this;
    }
}
