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

    public static function add($sportista, mysqli $conn)
    {
        $query = "INSERT INTO sportista (Ime,Prezime,Sport,Zemlja) VALUES ('$sportista->ime','$sportista->prezime',$sportista->sport,$sportista->zemlja)";
        return $conn->query($query);
    }

    public static function update($sportista, mysqli $conn)
    {
        $query = "UPDATE Sportista SET ime = '$sportista->ime', prezime = '$sportista->prezime',
        zemlja = $sportista->zemlja,sport = $sportista->sport  WHERE idSportiste = $sportista->id";
        return $conn->query($query);
    }

    public static function getAll(mysqli $conn)
    {
        $query = "SELECT * FROM Sportista";
        return $conn->query($query);
    }

    public static function getBySport($sportName, $conn)
    {
        $sport = Sport::getByName($sportName, $conn)->fetch_array();
        $idSporta = $sport['idSporta'];
        $query = "SELECT * FROM sportista WHERE Sport = $idSporta";
        return $conn->query($query);
    }

    public  function delete($conn)
    {
        $query = "DELETE FROM sportista WHERE idSportiste = $this->id";
        return $conn->query($query);
    }
}
