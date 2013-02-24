<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function ver() {
        $clienteActual = $this->nativesession->get('cliente');
        $data['titulo'] = 'Datos de envío';
        if ($clienteActual == NULL) {
            $clienteActual = new Cliente();
        }
        // Autocomplete
        $this->load->library('googlemaps');
        $config['center'] = '19.4326,-99.133201';
        if ($clienteActual->latitud && $clienteActual->latitud) {
            $config['center'] = $clienteActual->latitud . ',' . $clienteActual->longitud;
        }
        $data['cliente'] = $clienteActual;
        $config['zoom'] = '16';
        $config['map_height'] = '300px';
        $config['places'] = TRUE;
        $config['placesAutocompleteInputID'] = 'inputBusquedaDir';
        $config['placesAutocompleteBoundsMap'] = TRUE; // set results biased towards the maps viewport
        $config['placesAutocompleteOnChange'] = '   
                var place = placesAutocomplete.getPlace();
                var info = new Object();
                info.lat = place.geometry.location.lat();
                info.lng = place.geometry.location.lng();
                info.estado = findComponent(place, \'administrative_area_level_1\');
                info.ciudad = findComponent(place, \'locality\');
                info.calle = findComponent(place, \'route\');
                info.cp = findComponent(place, \'postal_code\');
                info.colonia = findComponent(place, \'neighborhood\');
                $("#calle").val(info.calle);
                $("#cp").val(info.cp);
                $("#colonia").val(info.colonia);';
        $this->googlemaps->initialize($config);
        $marker = array();
        $marker['position'] = $config['center'];
        $marker['draggable'] = TRUE;
        $this->googlemaps->add_marker($marker);
        $data['map'] = $this->googlemaps->create_map();
        $this->load->model('Comercio');
        $this->Comercio->load();
        $data['comercio'] = $this->Comercio;
        $this->load->view('movil/cuentaUsuario', $data);
    }

    public function ubicacion($param) {
        if ($param === 'get') {
            $this->load->model('Comercio');
            $this->Comercio->load();
            $data['comercio'] = $this->Comercio;
            $this->load->view('movil/dialogUbicacion', $data);
        }
        if ($param === 'set') {
            try {
                $params = $this->input->post();
                $clienteActual = $this->nativesession->get('cliente');
                if ($clienteActual == NULL) {
                    $clienteActual = new Cliente();
                }
                $clienteActual->latitud = (float)$params['latitud'];
                $clienteActual->longitud = (float)$params['longitud'];
                $this->nativesession->set('cliente', $clienteActual);
                echo "true";
            } catch (Exception $error) {
                echo "false";
            }
        }
    }

}

?>
