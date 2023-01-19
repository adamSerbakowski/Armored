<?php

namespace Armored\Source\partials;

class AddNote implements NotesInterface
{
    public function produced(): string
    {
        return "Was produced ";
    }
}
