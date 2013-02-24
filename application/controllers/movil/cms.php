<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CMS extends CI_Controller {

    public function index() {
        $data['nichts'] = NULL;
        $this->load->view('cms/principal', $data);
    }
}

?>