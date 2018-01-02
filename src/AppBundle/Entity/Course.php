<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="courses")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CourseRepository")
 */
class Course
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
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255,unique=true)
     */
    private $name;

    /**
     * @var date
     *
     * @ORM\Column(name="start_date", type="date")
     * @Assert\Date(message="El valor '{{ value }}' no es una fecha valida")
     */
    private $startDate;

    /**
     * @var date
     *
     * @ORM\Column(name="closing_date", type="date")
     * @Assert\Date(message="El valor '{{ value }}' no es una fecha valida")
     */
    private $closingDate;

    /**
     * @var time
     *
     * @ORM\Column(name="starts_at", type="time")
     * @Assert\Time(message="El valor '{{ value }}' no es una hora valida")
     */
    private $startsAt;

    /**
     * @var time
     *
     * @ORM\Column(name="ends_at", type="time")
     * @Assert\Time(message="El valor '{{ value }}' no es una hora valida")
     */
    private $endsAt;

    /**
     * @var string
     *
     * @ORM\Column(name="objetive", type="text")
     */
    private $objetive;

    /**
     * @var string
     *
     * @ORM\Column(name="addressed_to", type="text")
     */
    private $addressedTo;

    /**
     * @var string
     *
     * @ORM\Column(name="result", type="text")
     */
    private $result;

    /**
     * @var string
     *
     * @ORM\Column(name="requirements", type="text")
     */
    private $requirements;

    /**
     * @var string
     *
     * @ORM\Column(name="modality", type="string", length=100)
     */
    private $modality;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=100)
     */
    private $place;

    /**
     * @var int
     *
     * @ORM\Column(name="cost", type="integer")
     */
    private $cost;

    /**
     * @var int
     *
     * @ORM\Column(name="registration_fee", type="integer")
     */
    private $registrationFee;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_enabled", type="boolean")
     */
    private $isEnabled;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="number_of_meetings", type="integer")
     */
    private $numberOfMeetings;

    /**
     * @var datetime
     *
     * @ORM\Column(name="posted_at", type="datetime")
     * @Assert\DateTime(message="El valor '{{ value }}' no es una fecha valida")
     */
    private $postedAt;

    /**
     * @ORM\OneToMany(
     *     targetEntity="Thematic",
     *     mappedBy="course",
     *     orphanRemoval=true
     * )
     * @ORM\OrderBy({"title"="DESC"})
     */
    private $thematics;

    /**
     * @ORM\ManyToMany(targetEntity="Facilitator")
     */
    private $facilitators;

    /**
     * @ORM\ManyToMany(targetEntity="Item")
     */
    private $items;

    public function __construct()
    {
        $this->postedAt = new \DateTime();
        $this->thematics = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return datetime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param datetime $startDate
     *
     * @return self
     */
    public function setStartDate(datetime $startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return datetime
     */
    public function getClosingDate()
    {
        return $this->closingDate;
    }

    /**
     * @param datetime $closingDate
     *
     * @return self
     */
    public function setClosingDate(datetime $closingDate)
    {
        $this->closingDate = $closingDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getObjetive()
    {
        return $this->objetive;
    }

    /**
     * @param string $objetive
     *
     * @return self
     */
    public function setObjetive($objetive)
    {
        $this->objetive = $objetive;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressedTo()
    {
        return $this->addressedTo;
    }

    /**
     * @param string $addressedTo
     *
     * @return self
     */
    public function setAddressedTo($addressedTo)
    {
        $this->addressedTo = $addressedTo;

        return $this;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param string $result
     *
     * @return self
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * @param string $requirements
     *
     * @return self
     */
    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;

        return $this;
    }

    /**
     * @return string
     */
    public function getModality()
    {
        return $this->modality;
    }

    /**
     * @param string $modality
     *
     * @return self
     */
    public function setModality($modality)
    {
        $this->modality = $modality;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param string $place
     *
     * @return self
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param int $cost
     *
     * @return self
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * @return int
     */
    public function getRegistrationFee()
    {
        return $this->registrationFee;
    }

    /**
     * @param int $registrationFee
     *
     * @return self
     */
    public function setRegistrationFee($registrationFee)
    {
        $this->registrationFee = $registrationFee;

        return $this;
    }

    /**
     * @return bool
     */
    public function isIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * @param bool $isEnabled
     *
     * @return self
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNumberOfMeetings()
    {
        return $this->numberOfMeetings;
    }

    /**
     * @param integer $numberOfMeetings
     *
     * @return self
     */
    public function setNumberOfMeetings($numberOfMeetings)
    {
        $this->numberOfMeetings = $numberOfMeetings;

        return $this;
    }

    /**
     * @return datetime
     */
    public function getPostedAt()
    {
        return $this->postedAt;
    }

    /**
     * @param datetime $postedAt
     *
     * @return self
     */
    public function setPostedAt(datetime $postedAt)
    {
        $this->postedAt = $postedAt;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     *
     * @return self
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return time
     */
    public function getStartsAt()
    {
        return $this->startsAt;
    }

    /**
     * @param time $startsAt
     *
     * @return self
     */
    public function setStartsAt(time $startsAt)
    {
        $this->startsAt = $startsAt;

        return $this;
    }

    /**
     * @return time
     */
    public function getEndsAt()
    {
        return $this->endsAt;
    }

    /**
     * @param time $endsAt
     *
     * @return self
     */
    public function setEndsAt(time $endsAt)
    {
        $this->endsAt = $endsAt;

        return $this;
    }

    public function getThematics()
    {
        return $this->thematics;
    }

    public function addThematic(Thematic $thematic)
    {
        $this->thematics->add($thematic);
        $thematic->setCourse($this);
    }

    public function removeThematic(Thematic $thematic)
    {
        $this->thematics->removeElement($thematic);
    }

    /**
     * Get isEnabled
     *
     * @return boolean
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * Add facilitator
     *
     * @param \AppBundle\Entity\Facilitator $facilitator
     *
     * @return Course
     */
    public function addFacilitator(\AppBundle\Entity\Facilitator $facilitator)
    {
        $this->facilitators[] = $facilitator;

        return $this;
    }

    /**
     * Remove facilitator
     *
     * @param \AppBundle\Entity\Facilitator $facilitator
     */
    public function removeFacilitator(\AppBundle\Entity\Facilitator $facilitator)
    {
        $this->facilitators->removeElement($facilitator);
    }

    /**
     * Get facilitators
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFacilitators()
    {
        return $this->facilitators;
    }

    /**
     * Add item
     *
     * @param \AppBundle\Entity\Item $item
     *
     * @return Course
     */
    public function addItem(\AppBundle\Entity\Item $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * Remove item
     *
     * @param \AppBundle\Entity\Item $item
     */
    public function removeItem(\AppBundle\Entity\Item $item)
    {
        $this->items->removeElement($item);
    }

    /**
     * Get items
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItems()
    {
        return $this->items;
    }
}
