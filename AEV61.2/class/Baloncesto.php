<?php
require_once "Deportes.php";

class Baloncesto extends Deportes {
    public function __construct() {
        parent::__construct("Baloncesto", 4, "Canastas");
    }
}
?>