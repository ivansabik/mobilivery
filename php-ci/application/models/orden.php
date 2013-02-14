<?php

class Orden extends CI_Model {

    public $id, $fecha, $articulos;

    function __construct() {
        parent::__construct();
        $this->articulos = array();
        $this->fecha = date("Y-m-d H:i:s");
    }
    
    function getTotal() {
        
    }

}

?>
