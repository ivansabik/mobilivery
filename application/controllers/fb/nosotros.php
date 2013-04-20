<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Nosotros extends CI_Controller {

    public function index() {
        $this->load->model('Comercio');
        $this->Comercio->load();
        $data['comercio'] = $this->Comercio;
        $this->load->view('fb/nosotros', $data);
    }

}

?>