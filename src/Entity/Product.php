<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Name;

    /**
     * @ORM\Column(type="float")
     */
    private $Price;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="products")
     */
    private $Category;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imgurl;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="products")
     */
    private $Owner;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="product")
     */
    private $Publisher;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->Price;
    }

    public function setPrice(float $Price): self
    {
        $this->Price = $Price;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->Category;
    }

    public function setCategory(?Category $Category): self
    {
        $this->Category = $Category;

        return $this;
    }

    public function getImgurl(): ?string
    {
        return $this->imgurl;
    }

    public function setImgurl(string $imgurl): self
    {
        $this->imgurl = $imgurl;

        return $this;
    }

    public function getOwner(): ?User
    {
        return $this->Owner;
    }

    public function setOwner(?User $Owner): self
    {
        $this->Owner = $Owner;

        return $this;
    }

    public function getPublisher(): ?User
    {
        return $this->Publisher;
    }

    public function setPublisher(?User $Publisher): self
    {
        $this->Publisher = $Publisher;

        return $this;
    }
}
