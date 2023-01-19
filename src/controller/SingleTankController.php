<?php

namespace Armored\Source\controller;

use Armored\Source\classes\TankRepository;
use Armored\Source\model\Tank;
use Armored\Source\model\TankInterface;
use Armored\Source\view\SingleTankView;

class SingleTankController
{
    private $model;
    private $view;

    public function __construct(TankInterface $model, SingleTankView $view)
    {
        $this->model = new Tank;
        $this->model->getTankByName('T-34');
        $this->view = new SingleTankView();
    }
    public function showTank() : void
    {
        $this->view->displaySingleTankChart(
            $this->model->getName(),
            $this->model->getCountry(),
            $this->model->getProductionStart(),
            $this->model->getProductionEnd(),
        );
    }
}
