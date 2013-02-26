<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class PrincipalCMS extends CI_Controller {

    public function index() {
        $this->load->view('cms/principal');
    }
}

?>