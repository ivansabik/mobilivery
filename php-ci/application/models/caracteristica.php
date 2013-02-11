<?php

class Caracteristica extends CI_Model {

    public $id, $nombre, $valorUnico, $opciones;

    function __construct() {
        parent::__construct();

        $this->opciones = array();
    }

    function load($id) {
        
    }

    function toHtml() {
        $strHtml = '';
        $strHtml.= '<div data-role="fieldcontain">';
        $strHtml.= '<fieldset data-role="controlgroup">';
        $strHtml.= '<h4>' . $this->nombre . '</h4>';
        foreach ($this->opciones as $opcion) {
            // Característica de múltiples valores (no único)
            if ($this->valorUnico != 1)
                $strHtml.= '<input name="idOpcion-' . $opcion->id . '" id="idopcion-' . $opcion->id . '" value="' . $opcion->id . '" type="checkbox" />';
            // Característica de valor único (primera opción checked)
            else if ($opcion === $this->opciones[0])
                $strHtml.= '<input type="radio" name="idOpcionUnica-' . $this->id . '" id="idopcion-' . $opcion->id . '" value="' . $opcion->id . '" checked="checked"/>';
            // Característica de valor único (otras opciones)
            else
                $strHtml.= '<input type="radio" name="idOpcionUnica-' . $this->id . '" id="idopcion-' . $opcion->id . '"  value="' . $opcion->id . '" />';
            $strHtml.= '<label for = "idopcion-' . $opcion->id . '">' . $opcion->nombre . ' ($' . $opcion->precio . ')</label>';
        }
        $strHtml.= '</fieldset>';
        $strHtml.= '</div>';
        return $strHtml;
    }

}

?>
