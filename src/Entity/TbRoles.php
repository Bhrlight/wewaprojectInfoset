<?php

namespace App\Entity;

use App\Repository\TbRolesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TbRolesRepository::class)]
class TbRoles
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $label = null;


    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdat = null;

    #[ORM\ManyToOne]
    private ?User $modifiedby = null;

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'tbRoles')]
    private Collection $createdby;

    public function __construct()
    {
        $this->createdby = new ArrayCollection();
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

    public function setModifiedby(?User $modifiedby): static
    {
        $this->modifiedby = $modifiedby;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getCreatedby(): Collection
    {
        return $this->createdby;
    }

    public function addCreatedby(User $createdby): static
    {
        if (!$this->createdby->contains($createdby)) {
            $this->createdby->add($createdby);
        }

        return $this;
    }

    public function removeCreatedby(User $createdby): static
    {
        $this->createdby->removeElement($createdby);

        return $this;
    }
}
