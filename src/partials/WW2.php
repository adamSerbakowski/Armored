<?php

namespace Armored\Source\partials;

class WW2 extends AddNote
{
    public function produced(): string
    {
        return parent::produced() . "during World War Two";
    }
}
