<?php

class ArticuloOrden extends CI_Model {

    public $id, $idArticuloMenu, $nombreArticulo, $nombreCategoria, $comentarios, $cantidad, $opciones, $precio;

    function __construct() {
        parent::__construct();
        $this->opciones = array();
    }

    function load($id) {
        
    }

    function toHtml() {
        $strHtml = '';
        $strHtml .= '<h3>' . $this->nombreArticulo . '<div class="eliminar"><a href="#"></a></div><span class="ui-li-aside">$' . $this->getTotal() . '</span></h3>';
        $strHtml .= '<ul data-role="listview" data-inset="true">';
        $strHtml .= '<li>' . $this->cantidad . ' ' . $this->nombreArticulo . '<span class="ui-li-aside">$' . $this->precio . '</span></li>';
        foreach ($this->opciones as $opcion) {
            $strHtml .= '<li>' . $this->cantidad . ' ' . $opcion->nombre . '<span class="ui-li-aside">$' . $opcion->precio . '</span></li>';
        }
        if ($this->comentarios != "") {
            $strHtml .= '<li>Solicitud especial: ' . $this->comentarios . '</li>';
        }
        $strHtml .= '</ul>';
        $strHtml .= '<p>Subtotal: $ ' . $this->getTotal().'</p>';
        return $strHtml;
    }

    function getTotal() {
        $precioTotal = $this->precio * $this->cantidad;
        foreach ($this->opciones as $opcion) {
            $precioTotal+=$opcion->precio * $this->cantidad;
        }
        return $precioTotal;
    }

}

?>
