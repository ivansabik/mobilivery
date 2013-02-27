<?php

class ArticuloOrden extends CI_Model {

    public $id, $idArticuloMenu, $nombreArticulo, $nombreCategoria, $comentarios, $cantidad, $opciones, $precio;

    function __construct() {
        parent::__construct();
        $this->opciones = array();
    }

    function load($id) {
        
    }

    function toHtml($comercio = NULL) {
        $strHtml = '';
        $strHtml .= '<h4>' . $this->nombreArticulo . '<a href="' . site_url('movil/actual/eliminar/' . $this->id) . '"><img src="' . base_url('imgs/eliminar.png') . '" width="24" height="24" alt="Eliminar" class="eliminar" /></a><span class="ui-li-aside">$' . $this->getTotal() . '</span></h4>';
        $strHtml .= '<div data-role="collapsible" data-content-theme="' . $comercio->temaPage . '">';
        $strHtml .= '<h3>Detalles</h3>';
        $strHtml .= '<ul data-role="listview" data-inset="true">';
        $strHtml .= '<li>' . $this->cantidad . ' ' . $this->nombreArticulo . '<span class="ui-li-aside">$' . $this->precio . '</span></li>';
        foreach ($this->opciones as $opcion) {
            if ($opcion->precio > 0)
                $strHtml .= '<li>' . $this->cantidad . ' ' . $opcion->nombre . '<span class="ui-li-aside">$' . $opcion->precio . '</span></li>';
            else
                $strHtml .= '<li>' . $opcion->nombre . '</li>';
        }
        if ($this->comentarios != "") {
            $strHtml .= '<li>Solicitud especial: ' . $this->comentarios . '</li>';
        }
        $strHtml .= '</ul></div>';
        $strHtml .= '<p>Subtotal: $ ' . $this->getTotal() . '</p>';
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
