<?php
class Productos {
    protected $fecha_de_caducidad;
    protected $num_lote;

    public function __construct($fecha_de_caducidad, $num_lote) {
        $this->fecha_de_caducidad = $fecha_de_caducidad;
        $this->num_lote = $num_lote;
    }

    public function getFechaDeCaducidad() {
        return $this->fecha_de_caducidad;
    }

    public function getNumLote() {
        return $this->num_lote;
    }

    public function setNumLote($num_lote) {
        $this->num_lote = $num_lote;
    }

    public function setFechaDeCaducidad($fecha_de_caducidad) {
        $this->fecha_de_caducidad = $fecha_de_caducidad;
    }
}
?>