<?php
include 'html-head.php';
include 'header-titulotexto.php';
?>
<div>
    <ul data-role="listview" id="lista">
        <?php
        foreach ($categoria->articulos as $articuloMenu) {
            echo '<li>';
            echo '<a href="' . site_url('movil/articulos/ver/' . $articuloMenu->id) . '/' . url_title($articuloMenu->nombre, '-', TRUE) . '" data-ajax="false">';
            if ($articuloMenu->foto != '') {
                echo '<img src="' . base_url($articuloMenu->foto) . '"/>';
            }
            echo $articuloMenu->nombre;
            echo '<p><p/><p>$ ' . $articuloMenu->precio . '</p>';
            echo '</a>';
            echo '</li>';
        }
        ?>
    </ul>
</div>
<?php
include 'footer.php';
?>