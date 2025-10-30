<?php
// Clase Bebida que hereda de Artículo
require_once "articulo.php";

class Bebida extends Articulo {
    public $tamaño;
    public $temperatura;

    public function __construct($nombre, $precio, $disponibilidad, $categoria, $tamaño, $temperatura) {
        parent::__construct($nombre, $precio, $disponibilidad, $categoria);
        $this->tamaño = $tamaño;
        $this->temperatura = $temperatura;
    }
}
