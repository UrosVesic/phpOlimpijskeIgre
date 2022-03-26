<?php

class Korisnik
{
    public $username;
    public $password;
    public $imePrezime;

    public function __construct($username = null, $password = null, $imePrezime = null,)
    {
        $this->username = $username;
        $this->password = $password;
        $this->imePrezime = $imePrezime;
    }

    public static function prijaviSe($usr, mysqli $conn)
    {
        $query = "SELECT * FROM user WHERE username='$usr->username' and password='$usr->password'";
        return $conn->query($query);
    }
}
