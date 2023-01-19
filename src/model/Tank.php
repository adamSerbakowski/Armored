<?php

namespace Armored\Source\model;

use Armored\Config\Config;
use Armored\Source\classes\TankRepository;
use Armored\Source\partials\Note;

class Tank implements TankInterface
{
    private $name;
    private $country;
    private $productionStart;
    private $productionEnd;
    public $note;

    public function __construct(Note $note)
    {
        $this->note = $note;
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
        return $this->productionStart;
    }
    public function setProductionStart($productionStart)
    {
        $this->productionStart = $productionStart;
    }
    public function getProductionEnd()
    {
        return $this->productionEnd;
    }
    public function setProductionEnd($productionEnd)
    {
        $this->productionEnd = $productionEnd;
    }

    public function getTankByName($name) {
        $list = TankRepository::getTankData();

        foreach($list as $singleTank) {
            if ($singleTank['name'] == $name) {
                $this->setName($name);
                $this->setCountry($singleTank['country_name']);
                $this->setProductionStart($singleTank['production_start']);
                if ($singleTank['production_end']) :
                    $this->setProductionEnd($singleTank['production_end']);
                else :
                    $this->setProductionEnd('present');
                endif;
            }
        }
    }

//    public function getTankById($id) {
//
//        $conn = Config::getConfig();
//        $query = "SELECT * FROM Tank INNER JOIN Countries ON Tank.origin_country = Countries.id WHERE name = '$id'";
//        $res = $conn->query($query);
//        foreach ($res as $singleTank) :
//            $this->setName($id);
//            $this->setCountry($singleTank['country_name']);
//            $this->setProductionStart($singleTank['production_start']);
//            if ($singleTank['production_end']) :
//                $this->setProductionEnd($singleTank['production_end']);
//            else :
//                $this->setProductionEnd('present');
//            endif;
//
//        endforeach;
//    }
}
