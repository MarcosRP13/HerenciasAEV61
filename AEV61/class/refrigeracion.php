<?php
require_once 'frescos.php';

class Refrigerados extends Frescos {
    protected $temp_recm;
    protected $superv_alimento;

    public function __construct($fecha_de_caducidad, $num_lote, $fecha_de_envasado, $pais_origen, $temp_recm, $superv_alimento) {
        parent::__construct($fecha_de_caducidad, $num_lote, $fecha_de_envasado, $pais_origen);
        $this->temp_recm = $temp_recm;
        $this->superv_alimento = $superv_alimento;
    }

    public function getTempRecm() {
        return $this->temp_recm;
    }

    public function getSupervAliment() {
        return $this->superv_alimento;
    }

    public function setSupervAliment($superv_alimento) {
        $this->superv_alimento = $superv_alimento;
    }

    public function setTempRecm($temp_recm) {
        $this->temp_recm = $temp_recm;
    }
}
?>