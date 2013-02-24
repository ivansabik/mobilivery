<?php

class Orden extends CI_Model {

    public $id, $fecha, $articulos;

    function __construct() {
        parent::__construct();
        $this->articulos = array();
        $this->fecha = date("Y-m-d H:i:s");
    }
    
    function getTotal() {
        // Precio total de artículos * Número de artículos + Envío si tiene costo
        $precioTotal = 0;
        foreach ($this->articulos as $articulo) {
            $precioTotal += $articulo->getTotal();
        }
        return $precioTotal;
    }

}

?>
