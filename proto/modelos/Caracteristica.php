<?php

include_once '../modelos/OpcionCaracteristica.php';

class Caracteristica {

    // Opciones es ch, m, g y cada una con precio distinto
            public $nombre, $opciones, $valorUnico;

    function __construct($nombre, $valorUnico) {
        $this->nombre = $nombre;
        $this->valorUnico = $valorUnico;
    }

    function toHtml() {
        $strHtml = '';
        $strHtml.= '<div data-role="fieldcontain">';
        $strHtml.= '<fieldset data-role="controlgroup">';
        $strHtml.= '<legend>' . $this->nombre . '</legend>';
        foreach ($this->opciones as $opcion) {
            if ($this->valorUnico === FALSE)
                $strHtml.= '<input name="' . html_entity_decode($opcion->nombre, ENT_QUOTES, "UTF-8") . '" id="' . html_entity_decode($opcion->nombre, ENT_QUOTES, "UTF-8") . '" type="checkbox" />';
            else if ($opcion === $this->opciones[0])
                $strHtml.= '<input type="radio" name="' . $this->nombre . '" id="' . html_entity_decode($opcion->nombre, ENT_QUOTES, "UTF-8") . '" value="' . html_entity_decode($opcion->nombre, ENT_QUOTES, "UTF-8") . '" checked="checked" />';
            else
                $strHtml.= '<input type="radio" name="' . $this->nombre . '" id="' . html_entity_decode($opcion->nombre, ENT_QUOTES, "UTF-8") . '" value="' . html_entity_decode($opcion->nombre, ENT_QUOTES, "UTF-8") . '" />';
            $strHtml.= '<label for = "' . html_entity_decode($opcion->nombre, ENT_QUOTES, "UTF-8") . '">' . $opcion->nombre . ' ($' . $opcion->precio . ')</label>';
        }
        $strHtml.= '</fieldset>';
        $strHtml.= '</div>';
        return $strHtml;
    }

}

?>
