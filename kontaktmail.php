<?php

ini_set('default_mimetype', 'text/html');
ini_set('default_charset', 'ISO-8859-1');
header('content-type: application/json; charset=utf-8');

$name = strip_tags($_GET['name']);
$email = strip_tags($_GET['email']);
$telefon = strip_tags($_GET['telefon']);
$artanfrage = strip_tags($_GET['artanfrage']);
$anfrage = strip_tags($_GET['anfrage']);
$header = "Von: " . name . " <" . $email . ">rn";

$empfaenger = 'm.esser@rmp.de';
$titel = 'Das Kontaktformular wurde ausgeführt';
$mailtext = "
    Name: $name
    E-Mail: $email
    Telefon: $telefon
    Art der Anfrage: $artanfrage
    Anfrage: $anfrage
    ";

if (mail($empfaenger, $titel, $mailtext, $header)) {
    echo json_encode('success');
}
?>
