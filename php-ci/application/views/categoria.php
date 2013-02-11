<?php
include 'html-head.php';
include 'header-titulotexto.php';
?>
<div>
    <ul data-role="listview" id="lista">
        <?php
        foreach ($categoria->articulos as $articuloMenu) {
            echo '<li>';
            echo '<a href="' . site_url('articulos/ver/' . $articuloMenu->id) . '">';
            echo '<img src="' . base_url($articuloMenu->foto) . '"/>';
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