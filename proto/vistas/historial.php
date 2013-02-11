<?php
include_once '../modelos/Cliente.php';
include_once '../config.php';
include_once '../modelos/Comercio.php';


$cliente = Cliente::load();
$ordenes = $cliente->loadAnteriores();
?>
<!DOCTYPE html>
<html>
    <?php include 'snippets/htmlHead.php'; ?>
    <body>
        <div data-role="page" data-theme="<?php echo DATA_THEME_PAGE; ?>">
            <?php include 'snippets/header.php'; ?>
            <h3>Órdenes anteriores:</h3>
            <?php
            foreach ($ordenes as $orden) {
                echo $orden->toHtml();
            }
            ?>
            <?php include 'snippets/footer.php'; ?>
        </div>   
    </body>
</html>