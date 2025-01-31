<?php

class Deportes {
    protected $nombre;
    protected $numPartes;
    protected $tipoPuntuacion;

    public function __construct($nombre, $numPartes, $tipoPuntuacion) {
        $this->nombre = $nombre;
        $this->numPartes = $numPartes;
        $this->tipoPuntuacion = $tipoPuntuacion;
    }

    public function getInfo() {
        return "Deporte: {$this->nombre}, Las partes que tiene cada partido: {$this->numPartes}, Tipo de puntuación: {$this->tipoPuntuacion}";
    }
}
?>