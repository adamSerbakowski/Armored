<?php
namespace Armored;

use Armored\Source\classes\Router;
use Armored\Source\controller\HomeController;
use Armored\Source\controller\SingleTankController;
use Armored\Source\controller\TankController;
use Armored\Source\controller\TankListController;
use Armored\Source\model\Tank;
use Armored\Source\model\TankPrototype;
use Armored\Source\view\SingleTankView;

require 'vendor/autoload.php';

const BASE_URL = "/armored";
$router = new Router();

$router
    ->register(BASE_URL.'/', [HomeController::class, 'display'])
    ->register(BASE_URL.'/single', [SingleTankController::class, 'showTank'])
    ->register(BASE_URL.'/list', [TankListController::class, 'display'])
;

echo $router->resolve($_SERVER['REQUEST_URI']);


