<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Categorias extends CI_Controller {

    // CRUD para las categorías
    public function crear() {
        echo 'Hello World!';
    }

    public function ver($id, $strCategoria = '') {
        $this->load->model('Comercio');
        $this->Comercio->load();
        $data['comercio'] = $this->Comercio;
        $this->load->model('Categoria');
        $this->Categoria->load($id);
        $data['categoria'] = $this->Categoria;
        $data['titulo'] = $this->Categoria->nombre;
        if (!$strCategoria) {
            $strCategoria = url_title($this->Categoria->nombre, '-', TRUE);
            redirect('fb/categorias/ver/'.$id.'/'.$strCategoria);
        }
        $this->load->view('fb/categoria', $data);
    }

    public function editar() {
        echo 'Hello World!';
    }

    public function eliminar() {
        echo 'Hello World!';
    }

}

?>
