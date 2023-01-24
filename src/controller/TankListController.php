<?php

namespace Armored\Source\controller;

use Armored\Source\classes\TankRepository;

class TankListController
{
    public function display()
    {
        $list = TankRepository::getTankData();

        foreach($list as $singleTank) {
            echo $singleTank['tankId'].' = '.$singleTank['name'].'<br>';
        }
    }

}
