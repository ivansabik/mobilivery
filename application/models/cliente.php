<?php

class Cliente extends CI_Model {

    public $id, $usuario, $pass, $metodoAut, $auth, $calle, $colonia, $cp, $latitud, $longitud, $idFacebook, $idTwitter, $idGoogle, $telefono, $mail;

    function __construct() {
        parent::__construct();
    }

    function load($id) {
        
    }

    function getOrdenes() {
        
    }
    
    function isLogged() {
        if(!$this->idFacebook && !$this->idTwitter && !$this->idGoogle)
            return false;
        return true;
    }

}

?>
