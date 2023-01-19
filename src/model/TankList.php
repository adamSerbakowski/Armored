<?php

namespace Armored\Source\model;

use Armored\Config\Config;

class TankList
{
    public function getTankById() {

        $conn = Config::getConfig();
        $query = "SELECT * FROM Tank INNER JOIN Countries ON Tank.origin_country = Countries.id";
        $res = $conn->query($query);
        foreach ($res as $singleTank) :
            $this->setName($singleTank['name']);
            $this->setCountry($singleTank['country_name']);
            $this->setProductionStart($singleTank['production_start']);
            if ($singleTank['production_end']) :
                $this->setProductionEnd($singleTank['production_end']);
            else :
                $this->setProductionEnd('present');
            endif;

        endforeach;
    }
}
