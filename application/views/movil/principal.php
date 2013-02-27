<?php

include 'html-head.php';
include 'header-principal.php';

// Falta redondear al más alto
$numGrids = count($comercio->categorias) / 2;
// Cuando es impar qué pedal?? Se puede try catch que no haga naranjas
for ($i = 0; $i < $numGrids + 2; $i = $i + 2) {
    echo '<div class="ui-grid-a">';
    echo '<div class="ui-block-a">';
    echo '<a href="' . site_url('movil/categorias/ver/' . $comercio->categorias[$i]->id) . '/' . url_title($comercio->categorias[$i]->nombre, '-', TRUE) . '"><img src="' . base_url($comercio->categorias[$i]->icono) . '" width="200" height="200"/></a>';
    echo '<div class="nombre-categoria">' . $comercio->categorias[$i]->nombre . '</div>';
    echo '</div>';
    echo '<div class="ui-block-b">';
    echo '<a href="' . site_url('movil/categorias/ver/' . $comercio->categorias[$i + 1]->id) . '/' . url_title($comercio->categorias[$i + 1]->nombre, '-', TRUE) . '"><img src="' . base_url($comercio->categorias[$i + 1]->icono) . '" width="200" height="200"/></a>';
    echo '<div class="nombre-categoria">' . $comercio->categorias[$i + 1]->nombre . '</div>';
    echo '</div>';
    echo '</div>';
}
include 'footer.php';
?>