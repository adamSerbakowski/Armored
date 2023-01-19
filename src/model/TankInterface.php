<?php

namespace Armored\Source\model;

interface TankInterface
{
    public function getName();
    public function setName($name);
    public function getCountry();
    public function setCountry($country);
}
