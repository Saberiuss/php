<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JobsRepository")
 */
class Jobs
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $job;

    /**
     * @ORM\Column(type="float", nullable=true))
     */
    private $mpay;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Company;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $pay;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJob(): ?string
    {
        return $this->job;
    }

    public function setJob(string $job): self
    {
        $this->job = $job;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->Company;
    }

    public function setCompany(string $Company): self
    {
        $this->Company = $Company;

        return $this;
    }

    public function getPay(): ?float
    {
        return $this->pay;
    }

    public function setPay(?float $pay): self
    {
        $this->pay = $pay;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDiscription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }


    public function getMpay(): ?float
    {
        return $this->mpay;
    }
    public function setMpay(?float $mpay): self
    {
        $this->$mpay = $mpay;

        return $this;
    }
}
