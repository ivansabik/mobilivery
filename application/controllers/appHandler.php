<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AppHandler extends CI_Controller {

    public function index() {
        $this->load->library('user_agent');
        if ($this->agent->is_mobile()) {
            redirect('movil');
        } else {
            redirect('fb');
        }
        
    }

}

?>
