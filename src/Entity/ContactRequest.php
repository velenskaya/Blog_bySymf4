<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactRequestRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class ContactRequest
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=12, nullable=true)
     * @Assert\Length(min="10", max="12")
     */
    private $phone_number;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     */
    private $message;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    public function getId()
    {
        return $this->id;
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phone_number;
    }

    public function setPhoneNumber(string $phone_number): self
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->created_at;
    }

    /**
     * @param \DateTime $created_at
     */
    public function setCreatedAt(\DateTime $created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @ORM\PrePersist()
     */
    public function initSaveCreatedAt()
    {
        $this->created_at = new \DateTime();
    }

    /**
     * @Assert\IsTrue(payload="email")
     * @return bool
     */
    public function isRequiredFieldNotEmpty()
    {
        return $this->getEmail() || $this->getPhoneNumber();
    }
}
