<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="<?php echo base_url('css/estilo.php'); ?>" />
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
        <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
        <script>
            $('div[data-role="dialog"]').live('pageinit', function() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(exitoCoordenadas, errorCoordenadas);
                } else {
                    errorGeolocalizacion();
                }
                function exitoCoordenadas(location) {
                    $.post('<?php echo site_url('movil/usuario/ubicacion/set'); ?>', { latitud: location.coords.latitude, longitud: location.coords.longitude }, function(data) {
                        $("#contenido").html('<h4>Listo, revisa que la ubicación en el mapa sea correcta. Si no está bien puedes arrastrar el ícono para cambiarla.</h4><a href="#" data-role="button" data-rel="back">Regresar</a>').trigger("create");
                    });
                }
                function errorCoordenadas() {
                    $("#contenido").html('<h4>No se pudo acceder a tu ubicación, debes dar permiso para acceder a ella en tu navegador.</h4><a href="<?php echo site_url('usuario/ubicacion/get'); ?>" data-role="button" data-ajax="false">Intentar de nuevo</a><a href="#" data-role="button" data-rel="back">Regresar</a>').trigger("create");
                }
                function errorGeolocalizacion() {
                    $("#contenido").html('<h4>No se pudo acceder al dispositivo de geolocalización.</h4><a href="#" data-role="button" data-rel="back">Regresar</a>').trigger("create");
                }
            });

        </script>
    </head>
    <body>
        <div data-role="dialog">
            <div data-role="header" data-theme="<?php echo $comercio->temaHeader; ?>">
                <h3>Ubicación actual</h3>
            </div>
            <div data-role="content" data-theme="<?php echo $comercio->temaPage; ?>" id="contenido">
                <h3>Esperando autorización...</h3>
            </div>
        </div>
    </body>
</html>