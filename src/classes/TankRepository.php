<?php

namespace Armored\Source\classes;

use Armored\Config\Config;

class TankRepository
{
    public static $tankData;

    public static function getTankData() {

        $conn = Config::getConfig();
        $query = "SELECT * FROM Tank INNER JOIN Countries ON Tank.origin_country = Countries.id";
        $res = $conn->query($query);
        foreach ($res as $singleTank) :
            if ($singleTank['production_end']) :
                $productionEnd = $singleTank['production_end'];
            else :
                $productionEnd = 'present';
            endif;

            $single = [
                "tankId" => $singleTank['id'],
                "name" => $singleTank['name'],
                "country_name" => $singleTank['country_name'],
                "production_start" => $singleTank['production_start'],
                "production_end" => $productionEnd,
            ];
            self::$tankData[] = $single;
        endforeach;

        return self::$tankData;
    }
}
