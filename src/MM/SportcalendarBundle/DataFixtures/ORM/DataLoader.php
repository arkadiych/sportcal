<?php

namespace MM\SportcalendarBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Alice\DataFixtureLoader;
use Nelmio\Alice\Fixtures;

class DataLoader extends DataFixtureLoader
{
    const FILENAME = 'data.yml';

    /**
     * {@inheritDoc}
     */
    protected function getFixtures()
    {
        return  array(__DIR__ . DIRECTORY_SEPARATOR . self::FILENAME);
    }

    public function getDescription()
    {
        $arr = array(
            'Press of a bar',
            'Bumbbell bench press',
            'Barbel press seated incline',
        );
        return $arr[array_rand($arr)];
    }
}
 