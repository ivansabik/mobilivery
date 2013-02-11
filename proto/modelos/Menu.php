<?php

class Menu {

    public $categorias;

    public function agregarCategoria($categoria) {
        $this->categorias[] = $categoria;
    }

    public function quitarCategoria($idCategoria) {
        
    }

    public function save() {
        
    }

    public static function load() {
        $menu = new Menu();
        $menu->categorias = Categoria::load();
        return $menu;
    }

}

?>