<?php

namespace MM\SportcalendarBundle\Service;

use Doctrine\Bundle\DoctrineBundle\Registry;

class Calendar
{
    const ENTITY_CLASS = 'MM\SportcalendarBundle\Entity\Exercise';

    /**
     * @var \Doctrine\Bundle\DoctrineBundle\Registry
     */
    private $doctrine;

    public function __construct(Registry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    /**
    * Returns exercise for day
    *
    * @return array
    */
    public function getExercisesForDay(\DateTime $day)
    {
        return $this->doctrine->getRepository(self::ENTITY_CLASS)->findBy(
            array('date' => $day)
        );
    }
}
 