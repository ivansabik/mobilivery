<?php

class Comercio extends CI_Model {

    public $id, $nombre, $logo, $latitud, $longitud, $radioCobertura, $telefono, $horarios, $moneda, $categorias, $temaHeader, $temaPage, $temaFooter, $foto, $info;

    function __construct() {
        parent::__construct();
        $this->categorias = array();
        
    }

    function load() {
        $query = $this->db->get('comercio');
        $resultadosComercio = $query->result();
        $resultadosComercio = $resultadosComercio[0];
        //var_dump($resultadosComercio);
        $this->id = $resultadosComercio->id;
        $this->nombre = $resultadosComercio->nombre;
        $this->logo = $resultadosComercio->logo;
        $this->latitud = $resultadosComercio->latitud;
        $this->longitud = $resultadosComercio->longitud;
        $this->radioCobertura = $resultadosComercio->radioCobertura;
        $this->telefono = $resultadosComercio->telefono;
        $this->horarios = $resultadosComercio->horarios;
        $this->moneda = $resultadosComercio->moneda;
        $this->temaHeader = $resultadosComercio->temaHeader;
        $this->temaPage = $resultadosComercio->temaPage;
        $this->temaFooter = $resultadosComercio->temaFooter;
        $this->foto = $resultadosComercio->foto;
        $this->info = $resultadosComercio->info;
        $query = $this->db->get('categoria');
        $resultadosCategorias = $query->result();
        foreach ($resultadosCategorias as $resultadosCategoria) {
            $categoria = new Categoria();
            $categoria->id = $resultadosCategoria->id;
            $categoria->icono = $resultadosCategoria->icono;
            $categoria->nombre = $resultadosCategoria->nombre;
            $this->categorias[] = $categoria;
        }
    }

}

?>
