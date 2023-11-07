<?php

namespace App\Entity;

use App\Repository\TbAssociationsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TbAssociationsRepository::class)]
class TbAssociations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\Column(length: 20)]
    private ?string $phoneNumber = null;

    #[ORM\Column(length: 100)]
    private ?string $email = null;

    #[ORM\ManyToOne]
    private ?TbAssociations $parentId = null;

    #[ORM\ManyToOne]
    private ?User $createdby = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdat = null;

    #[ORM\ManyToOne]
    private ?User $modifiedby = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $modifiedat = null;

    #[ORM\OneToMany(mappedBy: 'tbAssociations', targetEntity: Tbfunds::class)]
    private Collection $funds;

    #[ORM\OneToMany(mappedBy: 'tbAssociations', targetEntity: Tbspent::class, orphanRemoval: true)]
    private Collection $expenses;

    #[ORM\OneToMany(mappedBy: 'tbAssociations', targetEntity: TbContributions::class)]
    private Collection $contribution;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?TbLocations $location = null;

    #[ORM\ManyToOne(inversedBy: 'tbAssociations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?TbAssociationtypes $associationtype = null;

    #[ORM\OneToMany(mappedBy: 'tbAssociations', targetEntity: TbNotification::class)]
    private Collection $notification;

    public function __construct()
    {
        $this->funds = new ArrayCollection();
        $this->expenses = new ArrayCollection();
        $this->contribution = new ArrayCollection();
        $this->notification = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): static
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getParentId(): ?TbAssociations
    {
        return $this->parentId;
    }

    public function setParentId(TbAssociations $parentId): static
    {
        $this->parentId = $parentId;

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
            $fund->setTbAssociations($this);
        }

        return $this;
    }

    public function removeFund(Tbfunds $fund): static
    {
        if ($this->funds->removeElement($fund)) {
            // set the owning side to null (unless already changed)
            if ($fund->getTbAssociations() === $this) {
                $fund->setTbAssociations(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Tbspent>
     */
    public function getExpenses(): Collection
    {
        return $this->expenses;
    }

    public function addExpense(Tbspent $expense): static
    {
        if (!$this->expenses->contains($expense)) {
            $this->expenses->add($expense);
            $expense->setTbAssociations($this);
        }

        return $this;
    }

    public function removeExpense(Tbspent $expense): static
    {
        if ($this->expenses->removeElement($expense)) {
            // set the owning side to null (unless already changed)
            if ($expense->getTbAssociations() === $this) {
                $expense->setTbAssociations(null);
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
            $contribution->setTbAssociations($this);
        }

        return $this;
    }

    public function removeContribution(TbContributions $contribution): static
    {
        if ($this->contribution->removeElement($contribution)) {
            // set the owning side to null (unless already changed)
            if ($contribution->getTbAssociations() === $this) {
                $contribution->setTbAssociations(null);
            }
        }

        return $this;
    }

    public function getLocation(): ?TbLocations
    {
        return $this->location;
    }

    public function setLocation(TbLocations $location): static
    {
        $this->location = $location;

        return $this;
    }

    public function getAssociationtype(): ?TbAssociationtypes
    {
        return $this->associationtype;
    }

    public function setAssociationtype(?TbAssociationtypes $associationtype): static
    {
        $this->associationtype = $associationtype;

        return $this;
    }

    /**
     * @return Collection<int, TbNotification>
     */
    public function getNotification(): Collection
    {
        return $this->notification;
    }

    public function addNotification(TbNotification $notification): static
    {
        if (!$this->notification->contains($notification)) {
            $this->notification->add($notification);
            $notification->setTbAssociations($this);
        }

        return $this;
    }

    public function removeNotification(TbNotification $notification): static
    {
        if ($this->notification->removeElement($notification)) {
            // set the owning side to null (unless already changed)
            if ($notification->getTbAssociations() === $this) {
                $notification->setTbAssociations(null);
            }
        }

        return $this;
    }

}
