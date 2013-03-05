<?php

class InfoComercio extends CI_Controller {

    public function index() {
        $this->load->model('Comercio');
        $this->Comercio->load();
        $data['comercio'] = $this->Comercio;
        $data['titulo'] = 'Nosotros';
        $this->load->library('googlemaps');
        $config['center'] = $this->Comercio->latitud . ',' . $this->Comercio->longitud;
        $config['zoom'] = '13';
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

    public function direcciones($latitud, $longitud) {
        $this->load->model('Comercio');
        $this->Comercio->load();
        $data['comercio'] = $this->Comercio;
        $data['titulo'] = 'Nosotros';
        $this->load->library('googlemaps');
        $config['center'] = $this->Comercio->latitud . ',' . $this->Comercio->longitud;
        $config['zoom'] = '14';
        $config['map_height'] = '300px';
        $config['directions'] = TRUE;
        $config['directionsStart'] = $latitud . ',' . $longitud;
        $config['directionsEnd'] = $this->Comercio->latitud . ',' . $this->Comercio->longitud;
        $config['directionsDivID'] = 'divDirecciones';
        $config['afterDirectionsLoad'] = "
            $('html, body').animate({
                scrollTop: $('#divDirecciones').offset().top
            });";
        $this->googlemaps->initialize($config);
        $marker = array();
        $marker['position'] = $config['center'];
        $this->googlemaps->add_marker($marker);
        $data['map'] = $this->googlemaps->create_map();
        $this->load->view('movil/comercio', $data);
    }

}