<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Facilitator
 *
 * @ORM\Table(name="facilitators")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FacilitatorRepository")
 */
class Facilitator
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\NotBlank(message="El nombre es requerido")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="profile", type="text")
     * @Assert\NotBlank(message="El perfil es requerido")
     */
    private $profile;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true, unique=true)
     * @Assert\Url(message="La url '{{ value }}' no es una url valida")
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=255, nullable=true, unique=true)
     * @Assert\Url(message="La url '{{ value }}' no es una url valida")
     */
    private $site;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Facilitator
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set profile
     *
     * @param string $profile
     *
     * @return Facilitator
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Facilitator
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param string $site
     *
     * @return self
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }
}
