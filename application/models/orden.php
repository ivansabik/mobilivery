<?php

class Orden extends CI_Model {

    public $id, $fecha, $articulos;

    function __construct() {
        parent::__construct();
        $this->articulos = array();
        $this->fecha = date("Y-m-d H:i:s");
        $this->contIds = 0;
    }
    
    function getTotal() {
        // Precio total de artículos * Número de artículos + Envío si tiene costo
        $precioTotal = 0;
        foreach ($this->articulos as $articulo) {
            $precioTotal += $articulo->getTotal();
        }
        return $precioTotal;
    }
    
    function eliminar($idArticulo) {
        foreach($this->articulos as $key=>$value) {
            if($this->articulos[$key]->id == $idArticulo) {
                unset($this->articulos[$key]);
            }
        }
    }
    
    function getNumArts() {
        $numArts = 0;
        foreach($this->articulos as $articulo) {
            $numArts += $articulo->cantidad;
        }
        return $numArts;
    }

}

?>
