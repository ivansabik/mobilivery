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
                    foreach ($categoria->articulos as $articulo) {
                        echo '<li>';
                        echo '<a href="articulo.php?id=' . $articulo->id . '">';
                        echo '<img src="' . $articulo->icono . '"/>';
                        echo $articulo->nombre;
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