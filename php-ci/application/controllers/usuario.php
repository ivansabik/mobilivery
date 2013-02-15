<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function ver() {
        $clienteActual = $this->nativesession->get('cliente');
        $data['data_theme_header'] = 'c';
        $data['data_theme_page'] = 'd';
        $data['data_theme_footer'] = 'a';
        if ($clienteActual == NULL) {
            $data['titulo'] = 'Login';
            $this->load->view('login', $data);
        } else {
            $data['titulo'] = 'Mis datos';
            $data['cliente'] = $clienteActual;
            // Autocomplete
            $this->load->library('googlemaps');
            $config['center'] = '19.374943, -99.252658';
            $config['zoom'] = 'auto';
            $config['places'] = TRUE;
            $config['placesAutocompleteInputID'] = 'inputBusquedaDir';
            $config['placesAutocompleteBoundsMap'] = TRUE; // set results biased towards the maps viewport
            $config['placesAutocompleteOnChange'] = '   
                var place = placesAutocomplete.getPlace();
                var info = new Object();
                info.lat = place.geometry.location.lat();
                info.lng = place.geometry.location.lng();
                info.pais = findComponent(place, \'country\');
                info.estado = findComponent(place, \'administrative_area_level_1\');
                info.ciudad = findComponent(place, \'locality\');
                info.calle = findComponent(place, \'street_address\');
                info.cp = findComponent(place, \'postal_code\');
                info.colonia = findComponent(place, \'neighborhood\');
                console.log(info);';
            
            $this->googlemaps->initialize($config);
            $data['map'] = $this->googlemaps->create_map();
            $this->load->view('cuentaUsuario', $data);
        }
    }

}

?>
