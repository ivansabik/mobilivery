<?php

class PrincipalMovil extends CI_Controller {

// Muestra el menu del restaurante
    public function index() {
        $this->load->model('Comercio');
        $this->Comercio->load();
        $data['comercio'] = $this->Comercio;
        $this->load->view('movil/html-head', $data);
        $this->load->view('movil/header-principal', $data);
        $this->load->view('movil/principal', $data);
        $this->load->view('movil/footer', $data);
    }

}