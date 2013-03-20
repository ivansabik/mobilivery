<?php
list($width, $height) = getimagesize(base_url('imgs/' . $comercio->logo));
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css">
        <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
        <link href="<?php echo base_url('css/fb.css'); ?>" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
        <div class="wrapper">
            <div class="maincontent">
                <div class="logo"><img src="<?php echo base_url('imgs/' . $comercio->logo); ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php echo $comercio->nombre; ?>" /></div>
                <ul class="tabs">
                    <li><a href="<?php echo site_url('fb/'); ?>">Nuestro menú</a></li>
                    <li><a href="<?php echo site_url('shared/ordenActual/ver/fb'); ?>">Tu orden</a></li>
                    <li><a href="<?php echo site_url('fb/datos-envio'); ?>">Dirección de envío</a></li>
                    <li><a href="<?php echo site_url('fb/nosotros'); ?>">Horarios y ubicación</a></li>
                </ul>
                <div class="tab_container">
                    <div id="tab1" class="tab_content">
                        <?php
                        if ($orden != FALSE) {
                            foreach ($orden->articulos as $articulo) {
                                echo $articulo->toHtmlFb();
                            }
                            echo '<h3>' . $orden->getNumArts() . ' artículo(s)</h3><h3>TOTAL: $' . $orden->getTotal() . '</h3>';
                            echo '</br>
                            <p>Cupón de descuento:
                            <input type="text" name="name" id="name" value=""  /></p>
                            <a href="#" class="button">Ordenar</a>';
                        } else {
                            echo 'No hay artículos';
                        }
                        ?>
                    </div><!--End Tab 2 -->
                </div><!--End Tab Container -->
            </div><!--End Main Content-->
        </div><!--End Wrapper -->
        </br>
        <div style="clear: both;"></div>
        <div class="powered">
            <p>Un servicio de</br><a href="#"><img src="<?php echo base_url('imgs/mobilivery.png'); ?>" width="100" height="22" alt="Mobilivery"></a></p>
        </div>
    </body>
</html>