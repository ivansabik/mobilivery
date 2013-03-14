<?php
list($width, $height) = getimagesize(base_url('imgs/' . $comercio->logo));
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css">
        <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
        <script src="<?php echo base_url('js/fb.js'); ?>"></script>
        <link href="<?php echo base_url('css/fb.css'); ?>" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
        <div class="wrapper">
            <div class="maincontent">
                <div class="logo"><img src="<?php echo base_url('imgs/' . $comercio->logo); ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php echo $comercio->nombre; ?>" /></div>
                <ul class="tabs">
                    <li><a href="#tab1">Nuestro menú</a></li>
                    <li><a href="#tab2">Tu orden</a></li>
                    <li><a href="#tab3">Dirección de envío</a></li>
                    <li><a href="#tab4">Horarios y ubicación</a></li>
                </ul>
                <div class="tab_container">
                    <div id="tab1" class="tab_content">
                        <?php
                        foreach ($comercio->categorias as $categoria) {
                            echo '<h3>';
                            echo '<a href="' . site_url('fb/categorias/ver/' . $categoria->id) . '/' . url_title($categoria->nombre, '-', TRUE) . '">' . $categoria->nombre . '</a>';
                            echo '</h3>';
                        }
                        ?>
                    </div><!--End Tab 2 -->
                </div><!--End Tab Container -->
            </div><!--End Main Content-->
            <div class="powered">
                <p>Un servicio de</br><a href="#"><img src="<?php echo base_url('imgs/mobilivery.png'); ?>" width="100" height="22" alt="Mobilivery"></a></p>
            </div>
        </div><!--End Wrapper -->

    </body>
</html>
