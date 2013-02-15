<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mapas extends CI_Controller {

    public function usuario() {
        $data['data_theme_header'] = 'c';
        $data['data_theme_page'] = 'd';
        $data['data_theme_footer'] = 'a';

        $this->load->library('googlemaps');
        $config = array();
        $config['center'] = 'auto';
        $config['onboundschanged'] = 'if (!centreGot) {
	var mapCentre = map.getCenter();
	marker_0.setOptions({
		position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng()) 
	});
}
centreGot = true;';
        $this->googlemaps->initialize($config);

// set up the marker ready for positioning 
// once we know the users location
        $marker = array();
        $this->googlemaps->add_marker($marker);
        $data['map'] = $this->googlemaps->create_map();
        $this->load->view('mapa', $data);
    }

}

?>
