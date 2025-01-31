<?php
require_once 'congelados.php';

class Nitrogeno extends Congelados {
    protected $info_met_cong;
    protected $temp_cong;

    public function __construct($fecha_de_caducidad, $num_lote, $fecha_de_envasado, $pais_origen, $temp_recm, $info_met_cong, $temp_cong) {
        parent::__construct($fecha_de_caducidad, $num_lote, $fecha_de_envasado, $pais_origen, $temp_recm);
        $this->info_met_cong = $info_met_cong;
        $this->temp_cong = $temp_cong;
    }

    public function getInfoMetCong() {
        return $this->info_met_cong;
    }

    public function getTempCong() {
        return $this->temp_cong;
    }

    public function setTempCong($temp_cong) {
        $this->temp_cong = $temp_cong;
    }

    public function setInfoMetCong($info_met_cong) {
        $this->info_met_cong = $info_met_cong;
    }

}
?>