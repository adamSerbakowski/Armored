<?php

namespace Armored\Source\controller;

use Armored\Config\Config;
use Armored\Source\model\Tank;
use Armored\Source\model\TankInterface;
use Armored\Source\view\SingleTankView;

class TankController
{
    private $model;
    private $view;

    public function __construct(TankInterface $model, SingleTankView $view)
    {
        $this->model = $model;
        $this->view = $view;
    }
    public function showTank() : void
    {
        $this->view->displaySingleTankChart(
            $this->model->getName(),
            $this->model->getCountry(),
            $this->model->getProductionStart(),
            $this->model->getProductionEnd(),
            $this->model->note->produced(),
        );
    }

//    public function showAll() : void
//    {
//        $conn = Config::getConfig();
//        $query = "SELECT * FROM Tank INNER JOIN Countries ON Tank.origin_country = Countries.id";
//        $res = $conn->query($query);
//        foreach ($res as $tank) :
//            $singleTank = new Tank();
//            $singleTank->setName($tank['name']);
//            $singleTank->setCountry($tank['country_name']);
//            $singleTank->setProductionStart($tank['production_start']);
//            if ($tank['production_end']) :
//                $singleTank->setProductionEnd($tank['production_end']);
//            else :
//                $singleTank->setProductionEnd('present');
//            endif;
//        $this->showTank();
//
//        endforeach;
//        $conn->close();
//    }
}
