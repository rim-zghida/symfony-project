<?php

namespace App\Entity;

use App\Repository\Univ22Repository;
use Doctrine\ORM\Mapping as ORM;



#[ORM\Entity(repositoryClass: Univ22Repository::class)]

class Univ22
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $teacher = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $adresses = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTeacher(): ?string
    {
        return $this->teacher;
    }

    public function setTeacher(string $teacher): static
    {
        $this->teacher = $teacher;

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

    public function getAdresses(): ?string
    {
        return $this->adresses;
    }

    public function setAdresses(string $adresses): static
    {
        $this->adresses = $adresses;

        return $this;
    }
}
