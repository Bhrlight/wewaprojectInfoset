<?php

namespace App\Entity;

use App\Repository\TbProgramsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TbProgramsRepository::class)]
class TbPrograms
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column(length: 20)]
    private ?string $phoneNumber = null;

    #[ORM\Column(length: 100)]
    private ?string $email = null;

    #[ORM\Column(length: 20)]
    private ?string $WhatsAppnumber = null;

    #[ORM\ManyToOne]
    private ?User $createdby = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdat = null;

    #[ORM\ManyToOne]
    private ?User $modifiedby = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $modifiedat = null;

    #[ORM\OneToOne(inversedBy: 'clear', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?TbLocations $location = null;

    #[ORM\ManyToMany(targetEntity: TbAssociations::class)]
    private Collection $association;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?TbProgrameTypes $programtype = null;

    #[ORM\OneToMany(mappedBy: 'tbPrograms', targetEntity: Tbfunds::class)]
    private Collection $funds;

    public function __construct()
    {
        $this->association = new ArrayCollection();
        $this->funds = new ArrayCollection();
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

    public function getWhatsAppnumber(): ?string
    {
        return $this->WhatsAppnumber;
    }

    public function setWhatsAppnumber(string $WhatsAppnumber): static
    {
        $this->WhatsAppnumber = $WhatsAppnumber;

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

    public function getLocation(): ?TbLocations
    {
        return $this->location;
    }

    public function setLocation(TbLocations $location): static
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return Collection<int, TbAssociations>
     */
    public function getAssociation(): Collection
    {
        return $this->association;
    }

    public function addAssociation(TbAssociations $association): static
    {
        if (!$this->association->contains($association)) {
            $this->association->add($association);
        }

        return $this;
    }

    public function removeAssociation(TbAssociations $association): static
    {
        $this->association->removeElement($association);

        return $this;
    }

    public function getProgramtype(): ?TbProgrameTypes
    {
        return $this->programtype;
    }

    public function setProgramtype(?TbProgrameTypes $programtype): static
    {
        $this->programtype = $programtype;

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
            $fund->setTbPrograms($this);
        }

        return $this;
    }

    public function removeFund(Tbfunds $fund): static
    {
        if ($this->funds->removeElement($fund)) {
            // set the owning side to null (unless already changed)
            if ($fund->getTbPrograms() === $this) {
                $fund->setTbPrograms(null);
            }
        }

        return $this;
    }
}
