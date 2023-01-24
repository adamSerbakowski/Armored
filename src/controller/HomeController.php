<?php

namespace Armored\Source\controller;

use Armored\Source\model\Tank;
use Armored\Source\model\TankPrototype;
use Armored\Source\partials\AddNote;
use Armored\Source\partials\Modern;
use Armored\Source\partials\Note;
use Armored\Source\partials\WW2;
use Armored\Source\view\SingleTankView;

class HomeController
{
    public function display()
    {
        echo "<a href='./'>Home</a><br>";
        echo "<a href='./single'>Single Tank</a><br>";
        echo "<a href='./list'>List of all Tanks</a><br>";
        $tankModel1 = new Tank(new Note(new Modern));
        $tankModel1->getTankByName('M1A1 Abrams');

        $tankModel2 = new Tank(new Note(new Modern));
        $tankModel2->getTankByName('Leopard 2');

        $tankModel3 = new Tank(new Note(new WW2));
        $tankModel3->getTankByName('T-34');

        $tankView = new SingleTankView();

        $tank1 = new TankController($tankModel1, $tankView);
        $tank2 = new TankController($tankModel2, $tankView);
        $tank3 = new TankController($tankModel3, $tankView);




        $tank1->showTank();

        $tank2->showTank();

        $tank3->showTank();

//$tankList = new TankController($tankModel3, $tankView);
//
//$tankList->showAll();

        $tankPrototype = new TankPrototype('PT-23 Zhuku');
        $tank4 = new TankController($tankPrototype, $tankView);

        $tank4->showTank();
    }
}


