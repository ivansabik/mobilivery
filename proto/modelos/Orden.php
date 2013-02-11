<?php

include_once '../modelos/ArticuloOrden.php';

class Orden {

    // Falta número de artículos por orden
            public $id, $articulos, $envio;

    function __construct($id, $envio = NULL) {
        $this->id = $id;
        $this->envio = $envio;
    }

    public function agregarArticulo($articuloOrden) {
        $this->articulos[] = $articuloOrden;
    }

    public function quitarArticulo($idArticulo) {
        foreach ($this->articulos as $articulo) {
            if ($idArticulo == $articulo->id) {
                // Quitar del arreglo de artículos
                return true;
            }
        }
        return false;
    }

    public function calcularTotal() {
        // Precio total de artículos * Número de artículos + Envío si tiene costo
        $precioTotal = 0;
        foreach ($this->articulos as $articulo) {
            $precioTotal += $articulo->calcularTotal();
        }
        return $precioTotal;
    }

    // Ver si es nueva orden, existente, etc
    public static function load($idOrden = NULL) {
        $orden = new Orden(1, "Domicilio");
        $articulo = new ArticuloOrden(2, "Refresco", "../vistas/imgs/arts/articulo_thmb.png", "../vistas/imgs/arts/articulo_gde.png");
        $articulo->opciones = array(new OpcionCaracteristica("Lata 355ml", 0.0));
        $articulo->comentarioOrden = 'Al tiempo';
        $articulo->cantidad = 3;
        $articulo->precio = 15;
        $orden->articulos = array(ArticuloOrden::load(1), $articulo);
        $orden->articulos[0]->cantidad = 3;
        $orden->articulos[1]->cantidad = 3;

        return $orden;
    }

    public static function save() {
        
    }

    public function toHtml() {
        $strHtml = '<div><ul data-role="listview" data-inset="true">';
        foreach ($this->articulos as $articulo) {
            $strHtml .= '<li>(' . $articulo->cantidad . ') - ' . $articulo->nombre . '</li>';
        }
        $strHtml .= '</ul><a href="#" data-role="button" data-inline="true" data-icon="refresh" >Repetir</a></div>';
        return $strHtml;
    }

}

?>
