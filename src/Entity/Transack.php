<?php

namespace App\Entity;

use App\Repository\TransackRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TransackRepository::class)]
class Transack
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $crypto = null;

    #[ORM\Column(length: 255)]
    private ?string $user_sender = null;

    #[ORM\Column(length: 255)]
    private ?string $user_reciver = null;

    #[ORM\Column]
    private ?int $quantite = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCrypto(): ?string
    {
        return $this->crypto;
    }

    public function setCrypto(string $crypto): static
    {
        $this->crypto = $crypto;

        return $this;
    }

    public function getUserSender(): ?string
    {
        return $this->user_sender;
    }

    public function setUserSender(string $user_sender): static
    {
        $this->user_sender = $user_sender;

        return $this;
    }

    public function getUserReciver(): ?string
    {
        return $this->user_reciver;
    }

    public function setUserReciver(string $user_reciver): static
    {
        $this->user_reciver = $user_reciver;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): static
    {
        $this->date = $date;

        return $this;
    }
}
