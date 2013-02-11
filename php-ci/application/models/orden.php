<?php

class Orden extends CI_Model {

    public $id, $fecha, $articulos;
    private $total;

    function __construct() {
        parent::__construct();
        $this->articulos = array();
    }
    
    function getTotal() {
        
    }

}

?>
