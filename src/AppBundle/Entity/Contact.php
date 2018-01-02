<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Contact
{

    /**
     * @Assert\NotBlank(message="Nombre y apellido es requerido")
     */
    protected $fullName;

    /**
     * @Assert\NotBlank(message="Email es requerido")
     * @Assert\Email(message="El email '{{ value }}' no es un email valido")
     */
    protected $email;

    /**
     * @Assert\NotBlank(message="El numero telefonico es requerido")
     */
    protected $telephoneNumber;

    /**
     * @Assert\Choice(choices={"Subject 1", "Subject 2", "Subject 3", "Others"}, message="Selecciona un asunto valido")
     */
    protected $subject;

    /**
     * @Assert\NotBlank(message="El mensaje es requerido")
     */
    protected $message;

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param mixed $fullName
     *
     * @return self
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelephoneNumber()
    {
        return $this->telephoneNumber;
    }

    /**
     * @param mixed $telephoneNumber
     *
     * @return self
     */
    public function setTelephoneNumber($telephoneNumber)
    {
        $this->telephoneNumber = $telephoneNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }
}
