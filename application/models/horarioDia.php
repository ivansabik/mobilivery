<?php

class HorarioDia extends CI_Model {

    public $id, $dia, $horarios;

    function __construct($dia = NULL, $horarios = NULL) {
        parent::__construct();
        $this->dia = $dia;
        $this->horarios = $horarios;
    }

    function getTextoDia() {
        if ($this->dia == 1) {
            return "Lunes";
        } elseif ($this->dia == 2) {
            return "Martes";
        } elseif ($this->dia == 3) {
            return "Miércoles";
        } elseif ($this->dia == 4) {
            return "Jueves";
        } elseif ($this->dia == 5) {
            return "Viernes";
        } elseif ($this->dia == 6) {
            return "Sábado";
        } elseif ($this->dia == 7) {
            return "Domingo";
        } else {
            return FALSE;
        }
    }

    function insert($dia, $horario) {
        $data = array(
            'dia' => $dia,
            'horario' => $horario
        );
        $this->db->insert('horario', $data);
    }

    function delete($dia, $horario) {
        $this->db->where('dia', $dia);
        $this->db->where('horario', $horario);
        $this->db->delete('horario'); 
    }

}

?>
