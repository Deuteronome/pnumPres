<?php

namespace App\Entity;

use App\Repository\PicturesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PicturesRepository::class)]
class Pictures
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $path = null;

    #[ORM\Column(options:["default" => 2000])]
    private ?int $delay = null;

    #[ORM\ManyToMany(targetEntity: Carousel::class, mappedBy: 'pictures')]
    private Collection $carousels;

    public function __construct()
    {
        $this->carousels = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): static
    {
        $this->path = $path;

        return $this;
    }

    public function getDelay(): ?int
    {
        return $this->delay;
    }

    public function setDelay(int $delay): static
    {
        $this->delay = $delay;

        return $this;
    }

    /**
     * @return Collection<int, Carousel>
     */
    public function getCarousels(): Collection
    {
        return $this->carousels;
    }

    public function addCarousel(Carousel $carousel): static
    {
        if (!$this->carousels->contains($carousel)) {
            $this->carousels->add($carousel);
            $carousel->addPicture($this);
        }

        return $this;
    }

    public function removeCarousel(Carousel $carousel): static
    {
        if ($this->carousels->removeElement($carousel)) {
            $carousel->removePicture($this);
        }

        return $this;
    }
}
