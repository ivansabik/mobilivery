<?php
include 'html-head.php';
include 'header-titulotexto.php';
?>
<h3>Mi orden:</h3>
<?php
foreach ($orden->articulos as $articulo) {
    echo $articulo->toHtml();
}
echo '<h3>TOTAL: $' . $orden->getTotal() . '</h3>';
?>
<div data-role="fieldcontain">
    <span class="elementosLabel">Cupón de descuento: </span>
    <input type="text" name="name" id="name" value=""  />
</div>	
<a href="#" data-role="button" data-icon="check" >Ordenar</a>
<?php
include 'footer.php';
?>