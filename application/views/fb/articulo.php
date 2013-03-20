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
        <script>
            precioBase = Number(<?php echo $articuloMenu->precio; ?>);
            $(document).ready( function() {
                $('#precioBase').html(precioBase);
                $('input:radio, input:checkbox, #cantidad').bind( 'change keyup', function(event, ui) {
                    precioOpciones = 0;
                    $('input:radio, input:checkbox:checked').each(function(index ) {
                        precioOpciones += Number($(this).val());
                    });
                    $('#precioBase').html((precioBase+precioOpciones)*Number($('#cantidad').val()));
                });
                $('#frmAgregar').submit(function() {
                    $('input:radio').each(function(index ) {
                        $(this).attr('name', 'idOpcionUnica'+$(this).attr('id'));
                    });
                });
            });       
        </script>
    </head>
    <body>
        <div class="wrapper">
            <div class="maincontent">
                <div class="logo"><img src="<?php echo base_url('imgs/' . $comercio->logo); ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php echo $comercio->nombre; ?>" /></div>
                <ul class="tabs">
                    <li><a href="<?php echo site_url('fb'); ?>">Nuestro menú</a></li>
                    <li><a href="<?php echo site_url('shared/ordenActual/ver/fb'); ?>">Tu orden</a></li>
                    <li><a href="<?php echo site_url('fb/datos-envio'); ?>">Dirección de envío</a></li>
                    <li><a href="<?php echo site_url('fb/nosotros'); ?>">Horarios y ubicación</a></li>
                </ul>
                <div class="tab_container">
                    <div id="tab1" class="tab_content">
                        <?php
                        foreach ($comercio->categorias as $categoriaMenu) {
                            echo '<h3>';
                            echo '<a href="' . site_url('fb/categorias/ver/' . $categoriaMenu->id) . '/' . url_title($categoriaMenu->nombre, '-', TRUE) . '">' . $categoriaMenu->nombre . '</a>';
                            echo '</h3>';
                        }
                        ?>
                    </div><!--End Tab 2 -->
                </div><!--End Tab Container -->
                <div id="content">
                    <h3><?php echo $articuloMenu->nombre; ?></h3>
                    </br>
                    <?php
                    if ($articuloMenu->foto != '') {
                        echo '<img src="' . base_url($articuloMenu->foto) . '" />';
                    }
                    ?>
                    <div>
                        <?php echo $articuloMenu->descripcion; ?>
                        </br>
                        <h4>
                            Precio: <?php echo '<span class="nobold">$ ' . $articuloMenu->precio . '</span>'; ?>
                        </h4>
                        </br>
                    </div>
                    <div id="descripcion">
                        <!-- Características del artículo !-->
                        <form action="<?php echo site_url('shared/ordenActual/agregar/fb'); ?>" method="post" data-ajax="false" id="frmAgregar">
                            <?php
                            foreach ($articuloMenu->caracteristicas as $caracteristica) {
                                echo $caracteristica->toHtmlFb();
                            }
                            ?>
                            </br>
                            <h4>Cantidad:</h4>
                            <input type="text" name="cantidad" value="1" id="cantidad"/></br></br>
                            <div>
                                <h4>Comentarios</h4>
                                <textarea name="comentarios">Ej. Sin chile, sin empanizar, al tiempo</textarea>
                            </div>
                            <div>
                                <h2>Subtotal: $<span id="precioBase"></span></h2>
                            </div>
                            </br>
                            <button type="submit" class="button">Agregar a orden</button>
                            <input type="hidden" name="idArticulo" value="<?php echo $articuloMenu->id; ?>">
                            <input type="hidden" name="nombreArticulo" value="<?php echo $articuloMenu->nombre; ?>">
                            <input type="hidden" name="nombreCategoria" value="<?php echo $articuloMenu->nombreCategoria; ?>">
                        </form>
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div><!--End Main Content-->

        </div><!--End Wrapper -->
        </br>
        <div style="clear: both;"></div>
        <div class="powered">
            <p>Un servicio de</br><a href="#"><img src="<?php echo base_url('imgs/mobilivery.png'); ?>" width="100" height="22" alt="Mobilivery"></a></p>
        </div>
    </body>
</html>