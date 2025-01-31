<?php
require_once "./class/deportes.php";
require_once "./class/futbol.php";
require_once "./class/baloncesto.php";
require_once "./class/rugby.php";

function generarDeporteAleatorio() {
    $deportes = [new Futbol(), new Baloncesto(), new Rugby()];
    return $deportes[array_rand($deportes)];
}

$deportesArray = [];
for ($i = 0; $i < 5; $i++) {
    $deportesArray[] = generarDeporteAleatorio();
}

foreach ($deportesArray as $deporte) {
    echo $deporte->getInfo() . "<br>";
}
?>