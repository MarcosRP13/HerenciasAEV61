<?php
require_once "deportes.php";

class Baloncesto extends Deportes {
    public function __construct() {
        parent::__construct("Baloncesto", 4, 12);
    }
}
?>