<?php

namespace Wcs;

class Hello {
    private string  $talk = 'Hello';

    public function getTalk()
    {
        return $this->talk;
    }

    public function setTalk($talk)
    {
        $this->talk = $talk;
    }
}
