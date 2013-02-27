<?php
include 'html-head.php';
include 'header-titulotexto.php';
?>
<script>
    $('#direcciones').live('click', function() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(exitoCoordenadas, errorCoordenadas);
            } else {
                errorGeolocalizacion();
            }
            function exitoCoordenadas(location) {
                var site_url = '<?php echo site_url('movil/infoComercio/direcciones'); ?>';
                window.location = site_url+'/'+location.coords.latitude+'/'+location.coords.longitude;
            }
            function errorCoordenadas() {
                $("#divDirecciones").html('<h4>No se pudo acceder a tu ubicación, debes dar permiso para acceder a ella en tu navegador.</h4>');
            }
            function errorGeolocalizacion() {
                $("#divDirecciones").html('<h4>No se pudo acceder al dispositivo de geolocalización.</h4>');
            }
    });
</script>
<div>
    <div class="tituloCentrado">
        <h1><?php echo $comercio->nombre; ?></h1>
        <img src="<?php echo base_url($comercio->foto); ?>" />
    </div>
    <ul data-role="listview" data-inset="true">
        <li><?php echo $comercio->info; ?></li>
    </ul>
    <div data-role="collapsible" data-content-theme="<?php echo $comercio->temaPage; ?>">
    <h3>Horarios</h3>
    <?php echo $comercio->toHtmlHorarios(); ?>
    </div>
    <h3>Teléfono</h4>
    <h4><a href="tel:<?php echo $comercio->telefono; ?>"><?php echo $comercio->telefono; ?></a></h4>
    <h3>Ubicación y área de entrega</h3>
    <?php echo $map['html']; ?>
    <a data-role="button" href="" id="direcciones">¿Cómo llegar?</a>
    <div id="divDirecciones"></div>
</div>
<?php
include 'powered.php';
include 'footer.php';
?>
