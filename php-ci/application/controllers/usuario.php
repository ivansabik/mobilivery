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
            $this->load->view('cuentaUsuario', $data);
        }
    }

}

?>
