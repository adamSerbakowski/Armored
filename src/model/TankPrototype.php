<?php

namespace Armored\Source\model;

class TankPrototype implements TankInterface
{
    private $name;
    private $country;

    public function __construct($name)
    {
        $this->name = $name;
        $this->country = 'Poland';
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }
    public function getProductionStart()
    {
        return 'not yet ';
    }
    public function getProductionEnd()
    {
        return 'some time in the future';
    }
}
