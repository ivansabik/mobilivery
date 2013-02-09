<?php

include_once 'ArticuloMenu.php';
include_once 'Caracteristica.php';

class Categoria {

    public $id, $nombre, $icono, $articuloMenus;

    // Si no se llama con id, es para cargar todas las categorías
    public static function load($idCategoria = NULL) {
        if ($idCategoria == NULL) {
            $categorias = array();
            $categoria = new Categoria();
            $categoria->id = '1';
            $categoria->nombre = 'Empanadas';
            $categoria->icono = '../vistas/imgs/cats/icono.png';
            $caracteristicas1 = new Caracteristica("Tamaño", TRUE);
            $caracteristicas1->opciones[] = new OpcionCaracteristica("Chico", 0.0);
            $caracteristicas1->opciones[] = new OpcionCaracteristica("Grande", 15.0);
            $caracteristicas2 = new Caracteristica("Complementos", FALSE);
            $caracteristicas2->opciones[] = new OpcionCaracteristica("Guacamole", 20);
            $caracteristicas2->opciones[] = new OpcionCaracteristica("Extra queso", 5);
            $articuloMenus = array(
                new ArticuloMenu(1, "Empanada de carne", "../vistas/imgs/arts/articulo_thmb.png", "../vistas/imgs/arts/articulo_gde.png", $caracteristicas1),
                new ArticuloMenu(2, "Empanada de queso", "../vistas/imgs/arts/articulo_thmb.png", "../vistas/imgs/arts/articulo_gde.png", $caracteristicas2)
            );
            $categoria->articulos = $articuloMenus;
            $categorias[] = $categoria;
            $categoria = new Categoria();
            $categoria->id = '2';
            $categoria->nombre = 'Pizzas';
            $categoria->icono = '../vistas/imgs/cats/icono.png';
            $caracteristicas1 = new Caracteristica("Tamaño", TRUE);
            $caracteristicas1->opciones[] = new OpcionCaracteristica("Chico", 0.0);
            $caracteristicas1->opciones[] = new OpcionCaracteristica("Grande", 15.0);
            $caracteristicas2 = new Caracteristica("Ingredientes", FALSE);
            $caracteristicas2->opciones[] = new OpcionCaracteristica("Jamón serrano", 20);
            $caracteristicas2->opciones[] = new OpcionCaracteristica("Espárragos", 15);
            $articuloMenus = array(
                new ArticuloMenu(3, "Pizza 4 quesos", "../vistas/imgs/arts/articulo_thmb.png", "../vistas/imgs/arts/articulo_gde.png", $caracteristicas1),
                new ArticuloMenu(4, "Pizza serrano", "../vistas/imgs/arts/articulo_thmb.png", "../vistas/imgs/arts/articulo_gde.png", $caracteristicas2)
            );
            $categoria->articulos = $articuloMenus;
            $categorias[] = $categoria;
            return $categorias;
        } else {
            $categorias = array();
            $categoria = new Categoria();
            $categoria->id = '1';
            $categoria->nombre = 'Empanadas';
            $categoria->icono = '../vistas/imgs/cats/icono.png';
            $articuloMenus = array(
                new ArticuloMenu(1, "Empanada de carne", "../vistas/imgs/arts/articulo_thmb.png", "../vistas/imgs/arts/articulo_gde.png"),
                new ArticuloMenu(2, "Empanada de queso", "../vistas/imgs/arts/articulo_thmb.png", "../vistas/imgs/arts/articulo_gde.png")
            );
            $categoria->articulos = $articuloMenus;
            return $categoria;
        }
    }

}

?>