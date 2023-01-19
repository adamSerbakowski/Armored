<?php

namespace Armored\Source\view;

class SingleTankView
{
    //, $note   <p>Note: {$note}</p>
    public function displaySingleTankChart($name,$country,$productionStart,$productionEnd,$note)
    {
        print "<h1>{$name}</h1><p>Designed in {$country}</p><p>Produced from {$productionStart} to {$productionEnd}</p><p>Note: {$note}</p>";
    }

}
