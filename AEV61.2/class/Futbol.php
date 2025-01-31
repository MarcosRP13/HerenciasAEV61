<?php
require_once "deportes.php";

class Futbol extends Deportes {
    public function __construct() {
        parent::__construct("Fútbol", 2, 45);
    }
}
?>