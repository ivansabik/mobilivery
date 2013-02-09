<?php
include_once '../modelos/Cliente.php';
include_once '../config.php';
include_once '../modelos/Comercio.php';


$cliente = Cliente::load();
?>
<!DOCTYPE html>
<html>
    <?php include 'snippets/htmlHead.php'; ?>
    <body>
        <div data-role="page" data-theme="<?php echo DATA_THEME_PAGE; ?>">
            <?php include 'snippets/header.php'; ?>
            <h3>Mi orden:</h3>
            <?php
            foreach ($cliente->orden->articulos as $articulo) {
                echo $articulo->toHtml();
            }
            echo '<h3>TOTAL: $' . $cliente->orden->calcularTotal() . '</h3>';
            ?>
            <div data-role="fieldcontain">
                <span class="elementosLabel">Cupón de descuento: </span>
                <input type="text" name="name" id="name" value=""  />
            </div>	
            <a href="#" data-role="button" data-icon="check" >Ordenar</a>
            <?php include 'snippets/footer.php'; ?>
        </div>   
    </body>
</html>