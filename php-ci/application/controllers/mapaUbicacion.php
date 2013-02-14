<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MapaUbicacion extends CI_Controller {

    public function ver() {
        $ordenActual = $this->nativesession->get('ordenActual');
        $data['data_theme_header'] = 'c';
        $data['data_theme_page'] = 'd';
        $data['data_theme_footer'] = 'a';
        $data['titulo'] = 'Orden';
        $this->load->view('mapaUbicacion', $data);
        }
    }

    

?>
