<?php

class Circulo {
    // Atributos
    private $radio;
    // Construcor
    public function __construct($radio) {
        $this->radio = $radio;
    }
    
    public function getRadio() {
        return $this->radio;
    }
    public function setRadio($radio) {
        $this->radio = $radio;
        return $this;
    }

    // Métodos propios
    public function areaCirculo() {
        $area = pi()*pow($this->radio, 2);
        $area = round($area, 2);
        return $area;
    }
    public function perimetroCirculo() {
        $perimetro = 2*pi()*$this->radio;
        $perimetro = round($perimetro, 2);
        return $perimetro;
    }
}

?>