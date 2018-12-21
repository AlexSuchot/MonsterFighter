<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(
 *  fields = {"nickname"},
 *  message = "The nickname you specified is already used."
 * )
 * @UniqueEntity(
 *  fields = {"email"},
 *  message = "The email you have indicated is already used."
 * )
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $nickname;
    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Assert\Email()
     */
    private $email;
    /**
     * @ORM\Column(type="array")
     */
    private $roles = ["ROLE_USER"];
    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     * @Assert\Length(min="8", minMessage="Your password must be at least 8 characters long.")
     */
    private $password;
    /**
     * @Assert\EqualTo(propertyPath="password", message="You did not type the same password.")
     */
    private $confirm_password;
    /**
     * @ORM\Column(type="integer")
     */
    private $win = 0;
    /**
     * @ORM\Column(type="integer")
     */
    private $lose = 0;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getNickname(): ?string
    {
        return $this->nickname;
    }
    public function setNickname(string $nickname): self
    {
        $this->nickname = $nickname;
        return $this;
    }
    public function getEmail(): ?string
    {
        return $this->email;
    }
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }
    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        // $roles[] = 'ROLE_ADMIN';
    
        return array_unique($roles);
    }
    public function setRoles(array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }
    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }
    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }
    /**
     * @see UserInterface
     */
    public function getConfirmPassword(): string
    {
        return (string) $this->confirm_password;
    }
    public function setConfirmPassword(string $confirm_password): self
    {
        $this->confirm_password = $confirm_password;
        return $this;
    }
    public function getWin(): ?int
    {
        return $this->win;
    }
    public function setWin(int $win): ?int
    {
        $this->win = $win;
        return $this;
    }
    public function getLose(): ?int
    {
        return $this->lose;
    }
    public function setLose(int $lose): ?int
    {
        $this->lose = $lose;
        return $this;
    }
    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }
    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}