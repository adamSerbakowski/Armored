<?php

namespace Armored\Source\partials;

class Modern extends AddNote
{
    public function produced(): string
    {
        return parent::produced() . "in modern times";
    }
}
