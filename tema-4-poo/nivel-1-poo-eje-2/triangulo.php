<?php

/**
 * Escribe un programa que defina una clase Shapecon un constructor que reciba como parámetros el ancho y alto.
 * Define dos subclases; Triangle y Rectangle que hereden de Shape y que calculen respectivamente el área de la forma area().
 * En el archivo main define dos objetos, un triángulo y un rectángulo y llama al método area de cada uno.
 */
class Triangulo extends Figura {

    public $texto;

    public function __construct($base, $altura, $texto) {
        Figura::__construct ($base, $altura); // TODO: Change the autogenerated stub
        $this->texto = $texto;
    }

    public function calcularArea() {
        echo $this->texto;
        $this->texto . " " . $this->area = ($this->ancho * $this->alto) / 2;
        parent::area();
    }
}