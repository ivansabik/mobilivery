<?php

class Articulo {

    public $id, $nombre, $descripcion, $foto, $icono, $precio, $comentarioOrden, $caracteristicas;
    
    public static function load($idArticulo) {
        $articulo = new Articulo();

        $articulo->id = "";
        $articulo->nombre = "";
        $articulo->descripcion = "";
        $articulo->foto = "";
        $articulo->icono = "";

        return $articulo;
    }   

}

?>