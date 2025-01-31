<?php

class Deportes {
    protected $nombre;
    protected $numPartes;
    protected $minutosParte;

    public function __construct($nombre, $numPartes, $minutosParte) {
        $this->nombre = $nombre;
        $this->numPartes = $numPartes;
        $this->minutosParte = $minutosParte;
    }

    public function getInfo() {
        return "Deporte: {$this->nombre}, Las partes que tiene cada partido: {$this->numPartes}, Minutos por parte: {$this->minutosParte}";
    }
}
?>