<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Categorias extends CI_Controller {

    // CRUD para las categorías
    public function crear() {
        echo 'Hello World!';
    }

    public function ver($id) {
        $this->load->model('Comercio');
        $this->Comercio->load();
        $data['comercio'] = $this->Comercio;
        $this->load->model('Categoria');
        $this->Categoria->load($id);
        $data['categoria'] = $this->Categoria;
        $data['titulo'] = $this->Categoria->nombre;
        $data['data_theme_header'] = 'c';
        $data['data_theme_page'] = 'd';
        $data['data_theme_footer'] = 'a';
        $this->load->view('categoria', $data);
    }

    public function editar() {
        echo 'Hello World!';
    }

    public function eliminar() {
        echo 'Hello World!';
    }

}

?>
