<?php

namespace MM\SportcalendarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Exercise
 *
 * @ORM\Table(name="Sportcalendar")
 * @ORM\Entity(repositoryClass= "MM\SportcalendarBundle\Entity\ExerciseRepository")
 */
class Exercise
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=30)
     * @Assert\NotBlank()
     * @Assert\Length(max=30)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="integer", options={"unsigned" = true})
     * @Assert\NotBlank()
     */
    private $weight;

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="integer", options={"unsigned" = true})
     * @Assert\NotBlank()
     */
    private $count;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     * @Assert\NotBlank()
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="time")
     * @Assert\NotBlank()
     */
    private $time;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Exercise
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return Exercise
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set count
     *
     * @param integer $count
     * @return Exercise
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer 
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Exercise
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     * @return Exercise
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }
}
