<?php

class Imagenes extends CI_Controller {

    function logo($operacion) {
        if ($operacion === 'eliminar') {
            $this->load->model('Comercio');
            $this->Comercio->load();
            $this->Comercio->logo = '';
            $this->Comercio->save();
            redirect('cms/editarComercio');
        }
    }

    function foto($operacion) {
        if ($operacion === 'eliminar') {
            $this->load->model('Comercio');
            $this->Comercio->load();
            $this->Comercio->foto = '';
            $this->Comercio->save();
            redirect('cms/editarComercio');
        }
    }

    function fondo($operacion) {
        if ($operacion === 'eliminar') {
            $this->load->model('Comercio');
            $this->Comercio->load();
            $this->Comercio->fondo = '';
            $this->Comercio->save();
            redirect('cms/editarComercio');
        }
    }

}

?>
