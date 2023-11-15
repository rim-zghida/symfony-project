<?php

namespace App\Entity;

use App\Repository\UniversityRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UniversityRepository::class)]

class University
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $studentName = null;

    #[ORM\Column(length: 255)]
    private ?string $studentFirstName = null;

    #[ORM\Column]
    private ?int $age = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStudentName(): ?string
    {
        return $this->studentName;
    }

    public function setStudentName(string $studentName): static
    {
        $this->studentName = $studentName;

        return $this;
    }

    public function getStudentFirstName(): ?string
    {
        return $this->studentFirstName;
    }

    public function setStudentFirstName(string $studentFirstName): static
    {
        $this->studentFirstName = $studentFirstName;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): static
    {
        $this->age = $age;

        return $this;
    }
}
