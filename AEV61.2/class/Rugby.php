<?php
require_once "deportes.php";

class Rugby extends Deportes {
    public function __construct() {
        parent::__construct("Rugby", 2, 40);
    }
}
?>