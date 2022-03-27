<?php

require "../dbBroker.php";
require "../model/sportista.php";

if (
    isset($_POST['id'])
) {
    $sportista = new Sportista($_POST['id'], null, null, null, null);
    $status = $sportista->delete($conn);
    if ($status) {
        echo 'Success';
    } else {
        echo $status;
        echo 'Failed';
    }
}
