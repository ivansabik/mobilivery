<?php
include_once '../modelos/ArticuloMenu.php';
include_once '../modelos/ArticuloOrden.php';
include_once '../modelos/Cliente.php';

// Ver si es nueva orden, orden de la sesión u orden histórica
if (isset($_GET["id"]))
    $idArticulo = $_GET["id"];
else
    $idArticulo = NULL;
if (isset($_GET["idOrden"]))
    $idArticuloOrden = $_GET["idOrden"];
else
    $idArticuloOrden = NULL;

if ($idArticuloOrden) {
    $articuloMenu = ArticuloOrden::load($idArticuloOrden);
} else {
    $articuloMenu = ArticuloMenu::load($idArticulo);
}
include_once '../modelos/comercio.php';

$comercio = Comercio::load();
$cliente = Cliente::load();
?>
<!DOCTYPE html>
<html>
    <?php include_once 'snippets/htmlHead.php'; ?>
    <body>
        <div data-role="page" data-theme="<?php echo DATA_THEME_PAGE; ?>">
            <?php include_once 'snippets/header.php'; ?>
            <div class="tituloCentrado">
                <h4><?php echo $articuloMenu->nombre; ?></h4>
                <img src="<?php echo $articuloMenu->foto; ?>" />
            </div>
            <div>
                <?php echo $articuloMenu->descripcion; ?>
            </div>
            <div>
                <?php echo $articuloMenu->precio . ' ' . $comercio->moneda; ?>
            </div>
            <!-- Características del artículo !-->
            <?php
            foreach ($articuloMenu->caracteristicas as $caracteristica) {
                echo $caracteristica->toHtml();
            }
            ?>
            <input type="range" name="slider" value="1" min="1" max="15"  />
            <div data-role="fieldcontain">
                <legend>Comentarios de la orden</legend>
                <textarea name="textarea">Sin chile porque es para la rata.</textarea>
            </div>	
            <div>
                <h3>Total: $<?php echo $cliente->orden->calcularTotal();?></h3>
            </div>
            <button>Guardar</button>
            <?php include_once 'snippets/footer.php'; ?>
        </div>   
    </body>
</html>