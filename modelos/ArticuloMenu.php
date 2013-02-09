<?php

include_once '../modelos/Caracteristica.php';

class ArticuloMenu {

    public $id, $nombre, $descripcion, $foto, $icono, $precio, $caracteristicas;

    public function __construct($id = NULL, $nombre = NULL, $icono = NULL, $foto = NULL, $caracteristicas = NULL) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->icono = $icono;
        $this->foto = $foto;
        $this->caracteristicas = $caracteristicas;
    }

    public static function load($idArticulo) {
        $caracteristicas1 = new Caracteristica("Tamaño", TRUE);
        $caracteristicas1->opciones[] = new OpcionCaracteristica("Chico", 0.0);
        $caracteristicas1->opciones[] = new OpcionCaracteristica("Grande", 15.0);
        $caracteristicas2 = new Caracteristica("Complementos", FALSE);
        $caracteristicas2->opciones[] = new OpcionCaracteristica("Guacamole", 20);
        $caracteristicas2->opciones[] = new OpcionCaracteristica("Extra queso", 5);
        return new ArticuloMenu(1, "Empanada de carne", "../vistas/imgs/arts/articulo_thmb.png", "../vistas/imgs/arts/articulo_gde.png", array($caracteristicas1, $caracteristicas2));
    }

    public function save() {
        
    }

}

?>