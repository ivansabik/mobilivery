<?php
include 'html-head.php';
include 'header-titulotexto.php';
?>
<?php
foreach ($orden->articulos as $articulo) {
    echo $articulo->toHtml($comercio);
}
echo '<h3>'.$orden->getNumArts().' artículo(s)</h3><h3>TOTAL: $' . $orden->getTotal() . '</h3>';
?>
<div data-role="fieldcontain">
    <span class="elementosLabel">Cupón de descuento: </span>
    <input type="text" name="name" id="name" value=""  />
</div>	
<a href="#" data-role="button" data-icon="check" data-iconpos="right">Ordenar</a>
<?php
include 'footer.php';
?>