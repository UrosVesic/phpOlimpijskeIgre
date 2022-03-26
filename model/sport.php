<?php

class Sport
{
    public $id;
    public $naziv;

    public function __construct($id = null, $naziv = null)
    {
        $this->id = $id;
        $this->naziv = $naziv;
    }

    public static function getAll(mysqli $conn)
    {
        $query = "SELECT * FROM sport";
        return $conn->query($query);
    }

    public static function getById($id, mysqli $conn)
    {
        $query = "SELECT * FROM sport WHERE idSporta = $id";
        return $conn->query($query);
    }
}
