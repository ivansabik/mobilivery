<?php

class ArticuloOrden extends CI_Model {

    public $id, $idArticuloMenu, $comentarios, $cantidad, $opciones;

    function __construct() {
        parent::__construct();
        $this->opciones = array();
    }

    function load($id) {
    }

}

?>
