<?php

include_once '../modelos/Orden.php';

class Cliente {

    public $id, $nombre, $calle, $colonia, $latitud, $longitud, $orden;

    public static function load() {
        $cliente = new Cliente();
        $cliente->id = "";
        $cliente->nombre = "";
        $cliente->calle = "";
        $cliente->colonia = "";
        $cliente->latitud = "";
        $cliente->longitud = "";
        $cliente->orden = Orden::load();

        return $cliente;
    }

    public function loadAnteriores() {
        return array(Orden::load(), Orden::load());
    }

}

?>