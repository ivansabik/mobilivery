<?php

class MenuEntrada extends CI_Controller {

// Muestra el menu del restaurante
    public function index() {
        $this->load->model('Comercio');
        $this->Comercio->load();
        $data['comercio'] = $this->Comercio;
        $data['data_theme_header'] = 'c';
        $data['data_theme_page'] = 'd';
        $data['data_theme_footer'] = 'a';
        $this->load->view('principal', $data);
    }

}