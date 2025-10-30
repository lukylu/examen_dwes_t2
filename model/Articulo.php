<?php
// Clase Artículo

class Articulo {
    public $nombre;
    public $precio;
    public $disponibilidad;
    public $categoria;

    public function __construct($nombre, $precio, $disponibilidad, $categoria) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponibilidad = $disponibilidad;
        $this->categoria = $categoria;
    }
}