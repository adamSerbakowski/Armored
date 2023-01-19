<?php

namespace Armored\Source\partials;

use Armored\Source\partials\AddNote;

class Note
{
    protected $note;

    public function __construct(NotesInterface $note)
    {
        $this->note = $note;
    }

    public function produced()
    {
        return $this->note->produced();
    }
}
