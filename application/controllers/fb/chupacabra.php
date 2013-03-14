<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Chupacabra extends CI_Controller {

    function index() {
        $this->load->model('fizzlebizzle');
        $result = $this->fizzlebizzle->get_user();

        if ($result['is_true']) {
            $this->nativesession->set('fbu', array('facebook_uid' => $result['facebook_uid'], 'is_logged_in' => TRUE));
            //print_r($this->nativesession->get('fbu'));
            $data['fbu'] = $this->nativesession->get('fbu');
            $this->load->model('Comercio');
            $this->Comercio->load();
            $data['comercio'] = $this->Comercio;

            $this->load->view('fb/principal', $data);
        } else {
            echo 'No logeado';
        }
    }

    function logout() {
        $this->auth->logout();
    }

}