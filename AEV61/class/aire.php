<?php
require_once 'congelados.php';

class Aire extends Congelados {
    protected $por_nitro;
    protected $por_oxi;
    protected $por_dio;
    protected $por_carbo;
    protected $por_vap;

    public function __construct($fecha_de_caducidad, $num_lote, $fecha_de_envasado, $pais_origen, $temp_recm, $carbo, $dio, $nitro, $oxi, $vapor) {
        parent::__construct($fecha_de_caducidad, $num_lote, $fecha_de_envasado, $pais_origen, $temp_recm);
        $this->carbo = $carbo;
        $this->dio = $dio;
        $this->nitro = $nitro;
        $this->oxi = $oxi;
        $this->vapor = $vapor;
    }

    public function getPorNitro() {
        return $this->por_nitro;
    }

    public function getPorOxi() {
        return $this->por_oxi;
    }

    public function getPorDio() {
        return $this->por_dio;
    }

    public function getPorCarbo() {
        return $this->por_carbo;
    }

    public function getPorVap() {
        return $this->por_vap;
    }

    public function setPorNitro($por_nitro) {
        $this->por_nitro = $por_nitro;
    }

    public function setPorOxi($por_oxi) {
        $this->por_oxi = $por_oxi;
    }

    public function setPorDio($por_dio) {
        $this->por_dio = $por_dio;
    }

    public function setPorCarbo($por_carbo) {
        $this->por_carbo = $por_carbo;
    }

    public function setPorVap($por_vap) {
        $this->por_vap = $por_vap;
    }
}
?>