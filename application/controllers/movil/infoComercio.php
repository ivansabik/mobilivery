<?php

class InfoComercio extends CI_Controller {

    public function index() {
        $this->load->model('Comercio');
        $this->Comercio->load();
        $data['comercio'] = $this->Comercio;
        $data['titulo'] = $this->Comercio->nombre;
        $this->load->library('googlemaps');
        $config['center'] = $this->Comercio->latitud . ',' . $this->Comercio->longitud;
        $config['zoom'] = '14';
        $config['map_height'] = '300px';
        $this->googlemaps->initialize($config);
        $marker = array();
        $marker['position'] = $config['center'];
        $this->googlemaps->add_marker($marker);
        $circle = array();
        $circle['center'] = $this->Comercio->latitud . ',' . $this->Comercio->longitud;
        $circle['radius'] = $this->Comercio->radioCobertura;
        $this->googlemaps->add_circle($circle);
        $data['map'] = $this->googlemaps->create_map();
        $this->load->view('movil/comercio', $data);
    }
    
    public function direcciones() {
        $params = $this->input->post();
        $latitud = (float)$params['latitud'];
        $longitud = (float)$params['longitud'];
        $this->load->model('Comercio');
        $this->Comercio->load();
        $data['comercio'] = $this->Comercio;
        $data['titulo'] = $this->Comercio->nombre;
        $this->load->library('googlemaps');
        $config['center'] = $this->Comercio->latitud . ',' . $this->Comercio->longitud;
        $config['zoom'] = '14';
        $config['map_height'] = '300px';
        $config['directions'] = TRUE;
        $config['directionsStart'] = $latitud . ',' . $longitud;
        $config['directionsEnd'] = $this->Comercio->latitud . ',' . $this->Comercio->longitud;
        $config['directionsDivID'] = 'divDirecciones';
        $this->googlemaps->initialize($config);
        $marker = array();
        $marker['position'] = $config['center'];
        $this->googlemaps->add_marker($marker);
        $data['map'] = $this->googlemaps->create_map();
        $this->load->view('movil/comercio', $data);
    }

}