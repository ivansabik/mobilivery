<?php

include_once '../modelos/Menu.php';
include_once '../modelos/Categoria.php';

class Comercio {

    public $id, $nombre, $logo, $latitud, $longitud, $radioCobertura, $menu, $telefono, $horarios, $moneda;

    public static function load() {
        include_once '../config.php';
        $comercio = new Comercio();
        $comercio->id = COMERCIO_ID;
        $comercio->nombre = COMERCIO_NOMBRE;
        $comercio->logo = COMERCIO_LOGO;
        return $comercio;
        //$comercio->menu = Menu::load();
    }
    
    public function getMenu() {
        $this->menu = Menu::load();
        return $this->menu; 
    }

}

?>