<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PokemonRepository")
 */

class Pokemon
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numberPokedex;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="integer")
     */
    private $life;

    /**
     * @ORM\Column(type="integer")
     */
    private $attack;

    /**
     * @ORM\Column(type="integer")
     */
    private $defense;

    /**
     * @ORM\Column(type="integer")
     */
    private $speed;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $icon;

    /**
     * Pokemon constructor.
     * @param $id
     * @param $numberPokedex
     * @param $name
     * @param $type
     * @param $life
     * @param $attack
     * @param $defense
     * @param $speed
     * @param $image
     * @param $icon
     */
    public function __construct($id, $numberPokedex, $name, $type, $life, $attack, $defense, $speed, $image, $icon)
    {
        $this->id = $id;
        $this->numberPokedex = $numberPokedex;
        $this->name = $name;
        $this->type = $type;
        $this->life = $life;
        $this->attack = $attack;
        $this->defense = $defense;
        $this->speed = $speed;
        $this->image = $image;
        $this->icon = $icon;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumberPokedex(): ?int
    {
        return $this->numberPokedex;
    }

    public function setNumberPokedex(int $numberPokedex): self
    {
        $this->numberPokedex = $numberPokedex;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getLife(): ?int
    {
        return $this->life;
    }

    public function setLife(int $life): self
    {
        $this->life = $life;

        return $this;
    }

    public function getAttack(): ?int
    {
        return $this->attack;
    }

    public function setAttack(int $attack): self
    {
        $this->attack = $attack;

        return $this;
    }

    public function getDefense(): ?int
    {
        return $this->defense;
    }

    public function setDefense(int $defense): self
    {
        $this->defense = $defense;

        return $this;
    }

    public function getSpeed(): ?int
    {
        return $this->speed;
    }

    public function setSpeed(int $speed): self
    {
        $this->speed = $speed;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getIcon() : ?string
    {
        return $this->icon;
    }

    public function setIcon(string $icon) : self
    {
        $this->icon = $icon;

        return $this;
    }
}
