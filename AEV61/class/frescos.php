<?php
require_once 'productos.php';

class Frescos extends Productos {
    protected $fecha_de_envasado;
    protected $pais_origen;

    public function __construct($fecha_de_caducidad, $num_lote, $fecha_de_envasado, $pais_origen) {
        parent::__construct($fecha_de_caducidad, $num_lote);
        $this->fecha_de_envasado = $fecha_de_envasado;
        $this->pais_origen = $pais_origen;
    }

    public function getFechaDeEnvasado() {
        return $this->fecha_de_envasado;
    }

    public function getPaisOrigen() {
        return $this->pais_origen;
    }

    public function setPaisOrigen($pais_origen) {
        $this->pais_origen = $pais_origen;
    }

    public function setFechaDeEnvasado($fecha_de_envasado) {
        $this->fecha_de_envasado = $fecha_de_envasado;
    }
}
?>