<?php
require_once "Deportes.php";

class Futbol extends Deportes {
    public function __construct() {
        parent::__construct("Fútbol", 2, "Goles");
    }
}
?>