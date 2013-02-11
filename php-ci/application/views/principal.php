<?php

include 'html-head.php';
include 'header-principal.php';

// Falta redondear al más alto
$numGrids = count($comercio->categorias) / 2;
// Cuando es impar qué pedal?? Se puede try catch que no haga naranjas
for ($i = 0; $i < $numGrids + 2; $i = $i + 2) {
    echo '<div class="ui-grid-a">';
    echo '<div class="ui-block-a">';
    echo '<a href="' . site_url('categorias/ver/' . $comercio->categorias[$i]->id) . '"><img src="' . $comercio->categorias[$i]->icono . '" /></a>';
    echo '<div class="nombre-categoria">' . $comercio->categorias[$i]->nombre . '</div>';
    echo '</div>';
    echo '<div class="ui-block-b">';
    echo '<a href="' . site_url('categorias/ver/' . $comercio->categorias[$i + 1]->id) . '"><img src="' . $comercio->categorias[$i + 1]->icono . '" /></a>';
    echo '<div class="nombre-categoria">' . $comercio->categorias[$i + 1]->nombre . '</div>';
    echo '</div>';
    echo '</div>';
}
include 'footer.php';
?>