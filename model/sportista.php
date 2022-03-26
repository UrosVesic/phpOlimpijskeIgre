<?php

class Sportista
{
    public $id;
    public $ime;
    public $prezime;
    public $sport;
    public $zemlja;


    public function __construct($id = null, $ime = null, $prezime = null, $sport = null, $zemlja = null)
    {
        $this->id = $id;
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->sport = $sport;
        $this->zemlja = $zemlja;
    }

    public static function getAll(mysqli $conn)
    {
        $query = "SELECT * FROM Sportista";
        return $conn->query($query);
    }
}
