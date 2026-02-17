<?php

// Andmebaasi ühenduse andmed
$db_server = 'localhost';
$db_andmebaas = 'car_rent';
$db_kasutaja = 'mario';
$db_salasona = 'mario';

// Ühenduse loomine
$yhendus = new mysqli($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);

// Ühenduse kontroll
if (!$yhendus) {
    die('Ei saa ühendust andmebaasiga');
}

?>
