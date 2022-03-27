<?php

require "../dbBroker.php";
require "../model/sport.php";
require "../model/sportista.php";
require "../model/zemlja.php";

if (
    isset($_POST['ime']) && isset($_POST['prezime'])
    && isset($_POST['sport']) && isset($_POST['zemlja'])
) {
    $sport = Sport::getByName($_POST['sport'], $conn)->fetch_array();
    $zemlja = Zemlja::getByName($_POST['zemlja'], $conn)->fetch_array();

    $sportista = new Sportista(null, $_POST['ime'], $_POST['prezime'], $sport['idSporta'], $zemlja['idZemlje']);
    $status = Sportista::add($sportista, $conn);
    if ($status) {
        echo 'Success';
    } else {
        echo $status;
        echo 'Failed';
    }
}
