<?php

class EstiloMovil extends CI_Controller {

    public function index() {
        $this->load->model('Comercio');
        $this->Comercio->load();
        $data['comercio'] = $this->Comercio;
        $this->load->view('cms/estiloMovil', $data);
    }
    
    public function actualizar() {
        $params = $this->input->post();
        $this->load->model('Comercio');
        $this->Comercio->load();
        $this->Comercio->temaHeader = $params['temaHeader'];
        $this->Comercio->temaPage = $params['temaPage'];
        $this->Comercio->temaFooter = $params['temaFooter'];
        $this->Comercio->fotosCategorias = $params['fotosCategorias'];
        $this->Comercio->save();
        redirect('cms/estiloMovil');
    }
    
    public function agregarFondo() {
        
    }

}