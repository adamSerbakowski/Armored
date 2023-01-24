<?php

namespace Armored\Source\controller;

use Armored\Source\classes\TankRepository;
use Armored\Source\model\Tank;
use Armored\Source\model\TankInterface;
use Armored\Source\partials\Modern;
use Armored\Source\partials\Note;
use Armored\Source\partials\WW2;
use Armored\Source\view\SingleTankView;

class SingleTankController
{
    public function showTank() : void
    {
        $tankModel1 = new Tank(new Note(new Modern));
        $tankModel1->getTankByName('M1A1 Abrams');
        $tankView = new SingleTankView();
        $tank1 = new TankController($tankModel1, $tankView);

        $tank1->showTank();
    }
}
