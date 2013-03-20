<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class DatosEnvioFb extends CI_Controller {

    public function index() {
        $clienteActual = $this->nativesession->get('cliente');
        if ($clienteActual == NULL) {
            $clienteActual = new Cliente();
        }
        
        // Muss geloescht werden
        $clienteActual->nombre = '';
        $clienteActual->mail = '';
        $clienteActual->telefono = '';
        
        $data['cliente'] = $clienteActual;
        $this->load->model('Comercio');
        $this->Comercio->load();
        $data['comercio'] = $this->Comercio;
        $this->load->view('fb/datosEnvio', $data);
    }

}

?>