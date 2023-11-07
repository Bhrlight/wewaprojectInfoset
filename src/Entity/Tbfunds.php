<?php

namespace App\Entity;

use App\Repository\TbfundsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TbfundsRepository::class)]
class Tbfunds
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $amount = null;

    #[ORM\Column(length: 255)]
    private ?string $reason = null;

    #[ORM\ManyToOne]
    private ?User $creatby = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdat = null;

    #[ORM\ManyToOne]
    private ?User $modifiedby = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $modifiedat = null;

    #[ORM\ManyToOne(inversedBy: 'funds')]
    private ?TbPrograms $tbPrograms = null;

    #[ORM\ManyToOne(inversedBy: 'funds')]
    #[ORM\JoinColumn(nullable: false)]
    private ?TbCurrency $tbCurrency = null;

    #[ORM\ManyToOne(inversedBy: 'funds')]
    #[ORM\JoinColumn(nullable: false)]
    private ?TbAssociations $tbAssociations = null;

    #[ORM\OneToMany(mappedBy: 'tbfunds', targetEntity: Tbspent::class)]
    private Collection $ecpenses;

    public function __construct()
    {
        $this->ecpenses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(string $reason): static
    {
        $this->reason = $reason;

        return $this;
    }

    public function getCreatby(): ?User
    {
        return $this->creatby;
    }

    public function setCreatby(?User $creatby): static
    {
        $this->creatby = $creatby;

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

    public function getTbPrograms(): ?TbPrograms
    {
        return $this->tbPrograms;
    }

    public function setTbPrograms(?TbPrograms $tbPrograms): static
    {
        $this->tbPrograms = $tbPrograms;

        return $this;
    }

    public function getTbCurrency(): ?TbCurrency
    {
        return $this->tbCurrency;
    }

    public function setTbCurrency(?TbCurrency $tbCurrency): static
    {
        $this->tbCurrency = $tbCurrency;

        return $this;
    }

    public function getTbAssociations(): ?TbAssociations
    {
        return $this->tbAssociations;
    }

    public function setTbAssociations(?TbAssociations $tbAssociations): static
    {
        $this->tbAssociations = $tbAssociations;

        return $this;
    }

    /**
     * @return Collection<int, Tbspent>
     */
    public function getEcpenses(): Collection
    {
        return $this->ecpenses;
    }

    public function addEcpense(Tbspent $ecpense): static
    {
        if (!$this->ecpenses->contains($ecpense)) {
            $this->ecpenses->add($ecpense);
            $ecpense->setTbfunds($this);
        }

        return $this;
    }

    public function removeEcpense(Tbspent $ecpense): static
    {
        if ($this->ecpenses->removeElement($ecpense)) {
            // set the owning side to null (unless already changed)
            if ($ecpense->getTbfunds() === $this) {
                $ecpense->setTbfunds(null);
            }
        }

        return $this;
    }
}
