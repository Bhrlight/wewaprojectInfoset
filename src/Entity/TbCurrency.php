<?php

namespace App\Entity;

use App\Repository\TbCurrencyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TbCurrencyRepository::class)]
class TbCurrency
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $label = null;

    #[ORM\ManyToOne]
    private ?User $createdby = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdat = null;

    #[ORM\ManyToOne]
    private ?User $modifiedby = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $modifiedat = null;

    #[ORM\OneToMany(mappedBy: 'tbCurrency', targetEntity: Tbfunds::class)]
    private Collection $funds;

    #[ORM\OneToMany(mappedBy: 'tbCurrency', targetEntity: TbContributions::class)]
    private Collection $contribution;

    public function __construct()
    {
        $this->funds = new ArrayCollection();
        $this->contribution = new ArrayCollection();
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

    public function setModifiedby(?User $modifiedby): static
    {
        $this->modifiedby = $modifiedby;

        return $this;
    }

    public function getModifiedat(): ?\DateTimeInterface
    {
        return $this->modifiedat;
    }

    public function setModifiedat(\DateTimeInterface $modifiedat): static
    {
        $this->modifiedat = $modifiedat;

        return $this;
    }

    /**
     * @return Collection<int, Tbfunds>
     */
    public function getFunds(): Collection
    {
        return $this->funds;
    }

    public function addFund(Tbfunds $fund): static
    {
        if (!$this->funds->contains($fund)) {
            $this->funds->add($fund);
            $fund->setTbCurrency($this);
        }

        return $this;
    }

    public function removeFund(Tbfunds $fund): static
    {
        if ($this->funds->removeElement($fund)) {
            // set the owning side to null (unless already changed)
            if ($fund->getTbCurrency() === $this) {
                $fund->setTbCurrency(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, TbContributions>
     */
    public function getContribution(): Collection
    {
        return $this->contribution;
    }

    public function addContribution(TbContributions $contribution): static
    {
        if (!$this->contribution->contains($contribution)) {
            $this->contribution->add($contribution);
            $contribution->setTbCurrency($this);
        }

        return $this;
    }

    public function removeContribution(TbContributions $contribution): static
    {
        if ($this->contribution->removeElement($contribution)) {
            // set the owning side to null (unless already changed)
            if ($contribution->getTbCurrency() === $this) {
                $contribution->setTbCurrency(null);
            }
        }

        return $this;
    }
}
