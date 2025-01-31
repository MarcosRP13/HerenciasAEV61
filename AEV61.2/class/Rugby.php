<?php
require_once "Deportes.php";

class Rugby extends Deportes {
    public function __construct() {
        parent::__construct("Rugby", 2, "Ensayos");
    }
}
?>