<?php
include_once '../modelos/Comercio.php';
$comercio = Comercio::load();
?>
<!DOCTYPE html>
<html>
    <?php include 'snippets/htmlHead.php'; ?>
    <body>
        <div data-role="page" data-theme="<?php echo DATA_THEME_PAGE;?>">
            <?php include 'snippets/headerHome.php'; ?>
            <?php
            // Falta redondear al más alto
            $numGrids = count($comercio->getMenu()->categorias) / 2;
            // Cuando es impar qué pedal?? Se puede try catch que no haga naranjas
            for ($i = 0; $i < $numGrids; $i++) {
                echo '<div class="ui-grid-a">';
                echo '<div class="ui-block-a">';
                echo '<a href="categoria.php?id=' . $comercio->menu->categorias[$i]->id . '"><img src="' . $comercio->menu->categorias[$i]->icono . '" /></a>';
                echo '<div class="nombre-categoria">' . $comercio->menu->categorias[$i]->nombre . '</div>';
                echo '</div>';
                echo '<div class="ui-block-b">';
                echo '<a href="categoria.php?id=' . $comercio->menu->categorias[$i + 1]->id . '"><img src="' . $comercio->menu->categorias[$i + 1]->icono . '" /></a>';
                echo '<div class="nombre-categoria">' . $comercio->menu->categorias[$i + 1]->nombre . '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
            <?php include 'snippets/footer.php'; ?>
        </div>   
    </body>
</html>