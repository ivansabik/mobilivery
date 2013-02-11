<?php
include_once '../config.php';
include_once '../modelos/Categoria.php';
include_once '../modelos/comercio.php';
$idCategoria = $_GET["id"];
$categoria = Categoria::load($idCategoria);
?>
<!DOCTYPE html>
<html>
    <?php include 'snippets/htmlHead.php'; ?>
    <body>
        <div data-role="page" data-theme="<?php echo DATA_THEME_PAGE;?>">
            <?php include 'snippets/header.php'; ?>
            <div>
                <ul data-role="listview" id="lista">
                    <?php
                    foreach ($categoria->articulos as $articuloMenu) {
                        echo '<li>';
                        echo '<a href="articulo.php?id=' . $articuloMenu->id . '">';
                        echo '<img src="' . $articuloMenu->icono . '"/>';
                        echo $articuloMenu->nombre;
                        echo '</a>';
                        echo '</li>';
                    }
                    ?>
                </ul>
            </div>
            <?php include 'snippets/footer.php'; ?>
        </div>   
    </body>
</html>