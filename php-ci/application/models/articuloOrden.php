<?php

class ArticuloOrden extends CI_Model {

    public $id, $idArticuloMenu, $nombreArticulo, $nombreCategoria, $comentarios, $cantidad, $opciones;

    function __construct() {
        parent::__construct();
        $this->opciones = array();
    }

    function load($id) {
        
    }

    function toHtml() {
        $strHtml = '<div data-role="collapsible" data-inset="false">';
        $strHtml .= '<h1>' . $this->nombreArticulo . '<span class="ui-li-aside">$' . $this->getTotal() . '</span></h1>';
        $strHtml .= '<ul data-role="listview">';
        $strHtml .= '<li>' . $this->cantidad . 'x ' . $this->nombreArticulo . '<span class="ui-li-aside">$' . $this->precio . '</span></li>';
        foreach ($this->opciones as $opcion) {
            $strHtml .= '<li>' . $this->cantidad . 'x ' . $opcion->nombre . '<span class="ui-li-aside">$' . $opcion->precio . '</span></li>';
        }
        $strHtml .= '<li>Solicitud especial: ' . $this->comentarios . '</li>';
        $strHtml .= '<li><a href="#" data-role="button" data-icon="delete">Eliminar</a></li>';
        $strHtml .= '<li>Subtotal: $ ' . $this->getTotal() . '</li>';
        $strHtml .= '</ul>';
        $strHtml .= '</div>';
        return $strHtml;
    }

    function getTotal() {
        
    }

}

?>
