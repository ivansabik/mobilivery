<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Articulos extends CI_Controller {

    // CRUD para las categorías
    public function crear() {
        echo 'Hello World!';
    }

    public function ver($id) {
        $this->load->model('ArticuloMenu');
        $this->ArticuloMenu->load($id);
        $data['titulo'] = $this->ArticuloMenu->nombreCategoria;
        $data['articuloMenu'] = $this->ArticuloMenu;
        $this->load->model('Comercio');
        $this->Comercio->load();
        $data['comercio'] = $this->Comercio;
        $this->load->view('movil/articulo', $data);
    }

    public function editar() {
        echo 'Hello World!';
    }

    public function eliminar() {
        echo 'Hello World!';
    }

}

?>
