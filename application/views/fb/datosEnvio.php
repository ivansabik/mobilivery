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
                        <div id="datosEnvio">
                            <div><label>Nombre: </label> 
                                <input id="nombre" name="nombre" type="text" value="<?php echo $cliente->nombre; ?>"/>
                            </div>
                            </br>
                            <div><label>Correo electrónico: </label> 
                                <input id="nombre" name="nombre" type="text" value="<?php echo $cliente->mail; ?>"/>
                            </div>
                            </br>
                            <div><label>Teléfono: </label> 
                                <input id="telefono" name="nombre" type="text" value="<?php echo $cliente->telefono; ?>"/>
                            </div>
                            </br>
                            <div><label>Calle: </label> 
                                <input id="calle" name="calle" type="text" />
                            </div>
                            </br>
                            <div><label>Colonia: </label> 
                                <input id="colonia" name="col" type="text" />
                            </div>
                            </br>
                            <div><label>CP: </label> 
                                <input id="cp" name="cp" type="text" />
                            </div>
                            </br>
                            <div><label>Número: </label> 
                                <input id="numExt" name="num" type="text" />
                            </div>
                            </br>
                            <div><label>Interior: </label> 
                                <input id="numInt" name="numInt" type="text" />
                            </div>
                            </br>
                            <p><a href="#" class="button">Guardar</a></p>
                        </div>
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
