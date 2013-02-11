<?php

include_once '../modelos/ArticuloMenu.php';

class ArticuloOrden extends ArticuloMenu {

    public $comentarioOrden, $cantidad, $opciones, $fecha;

    public static function load($idArticulo) {
        $articulo = new ArticuloOrden(1, "Empanada de carne", "../vistas/imgs/arts/articulo_thmb.png", "../vistas/imgs/arts/articulo_gde.png");
        $articulo->opciones = array(new OpcionCaracteristica("Chico", 0.0), new OpcionCaracteristica("Guacamole", 20), new OpcionCaracteristica("Extra queso", 5));
        $articulo->comentarioOrden = '';
        $articulo->cantidad = 4;
        $articulo->precio = 30;
        return $articulo;
    }

    public function calcularTotal() {
        $precioTotal = $this->precio * $this->cantidad;
        foreach ($this->opciones as $opcion) {
            $precioTotal+=$opcion->precio * $this->cantidad;
        }
        return $precioTotal;
    }

    public function save() {
        
    }

    public function toHtml() {
        $strHtml = '<div data-role="collapsible" data-inset="false">';
        $strHtml .= '<h1>(' . $this->cantidad . ') ' . $this->nombre . ' - $' . ($this->calcularTotal()) . '</h1>';
        $strHtml .= '<ul>';
        $strHtml .= '<li class="elementosLabel">(' . $this->cantidad . ') - ' . $this->nombre . ' - $' . $this->precio . '</li>';
        foreach ($this->opciones as $opcion) {
            $strHtml .= '<li class="elementosLabel">(' . $this->cantidad . ') - ' . $opcion->nombre . ' - $' . $opcion->precio . '</li>';
        }
        $strHtml .= '<li class="elementosLabel">Solicitud especial: ' . $this->comentarioOrden . '</li>';
        $strHtml .= '</ul>';
        $strHtml .= '<a href="#" data-role="button" data-inline="true" data-icon="plus" data-iconpos="notext"></a>';
        $strHtml .= '<a href="#" data-role="button" data-inline="true" data-icon="minus" data-iconpos="notext"></a>';
        $strHtml .= '<a href="#" data-role="button" data-inline="true" data-icon="delete" data-iconpos="notext"></a>';
        $strHtml .= '<h4>Subtotal: $ ' . $this->calcularTotal() . '</h4>';
        $strHtml .= '</div>';
        return $strHtml;
    }

}

?>