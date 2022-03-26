<?php

class Zemlja
{
    public $id;
    public $naziv;

    public function __construct($id = null, $naziv = null)
    {
        $this->id = $id;
        $this->naziv = $naziv;
    }
}
