<?php

class EditarComercio extends CI_Controller {

    public function index() {
        $this->load->model('Comercio');
        $this->Comercio->load();
        $data['comercio'] = $this->Comercio;
        
        $this->load->library('googlemaps');
        $config['center'] = $this->Comercio->latitud.','.$this->Comercio->longitud;
        $config['zoom'] = '14';
        $this->googlemaps->initialize($config);
        $marker = array();
        $marker['position'] = $config['center'];
        $marker['draggable'] = TRUE;
        $this->googlemaps->add_marker($marker);
        
        $circle = array();
        $circle['center'] = $this->Comercio->latitud . ',' . $this->Comercio->longitud;
        $circle['radius'] = $this->Comercio->radioCobertura;
        $this->googlemaps->add_circle($circle);
        
        $data['map'] = $this->googlemaps->create_map();
        
        $this->load->view('cms/comercio', $data);
    }

}