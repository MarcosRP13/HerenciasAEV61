<?php
require_once 'congelados.php';

class Agua extends Congelados {
    protected $salinidad;

    public function __construct($fecha_de_caducidad, $num_lote, $fecha_de_envasado, $pais_origen, $temp_recm, $salinidad) {
        parent::__construct($fecha_de_caducidad, $num_lote, $fecha_de_envasado, $pais_origen, $temp_recm);
        $this->salinidad = $salinidad;
    }

    public function getSalinidad() {
        return $this->salinidad;
    }

    public function setSalinidad($salinidad) {
        $this->salinidad = $salinidad;
    }
}
?>