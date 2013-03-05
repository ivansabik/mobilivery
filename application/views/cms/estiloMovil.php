<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $comercio->nombre; ?> Mobilivery CMS</title>
        <!--[if IE]>
        <style type="text/css"> 
        /* place css fixes for all versions of IE in this conditional comment */
        .twoColElsLt #sidebar1 { padding-top: 30px; }
        .twoColElsLt #mainContent { zoom: 1; padding-top: 15px; }
        /* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */
        </style>
        <![endif]-->
        <link href="<?php echo base_url('css/cms.css'); ?>" rel="stylesheet" type="text/css" />
        <?php echo $map['js']; ?>
        <meta name="robots" content="noindex">
    </head>
    <body class="twoColElsLt">
        <div id="container">
            <div id="sidebar1">
                <p><a href="<?php echo site_url('cms/editarComercio'); ?>" class="button orange">Editar info comercio</a></p>
                <p><a href="<?php echo site_url('cms/estiloMovil'); ?>" class="button orange">Personalizar tienda móvil</a></p>
                <p><a href="#" class="button orange">Editar categorías</a></p>
                <p><a href="#" class="button orange">Editar artículos</a></p>
                <p><a href="#" class="button orange">Editar características</a></p>
                <p><a href="#" class="button orange">Logout</a></p>
            </div>
            <div id="mainContent">
                <div id="contenido">
                    <h2>Estilo de sitio móvil</h2>
                    <p>
                    <div>
                        <span class="negritas">Tema de header: </span>
                        <select>
                            <option value="a">a</option>
                            <option value="b">b</option>
                            <option value="c">c</option>
                            <option value="d">d</option>
                            <option value="e">e</option>
                        </select>
                    </div>
                    </p>
                    <p>
                        <span class="negritas">Tema de contenido: </span>
                        <input id="" value="<?php echo $comercio->temaPage; ?>"/>
                    </p>
                    <p>
                        <span class="negritas">Tema de footer: </span>
                        <input id="" value="<?php echo $comercio->temaFooter; ?>"/>
                    </p>
                    <p>
                    <p class="negritas">Imagen de fondo:</p>
                    <?php
                    if ($comercio->fondo != '')
                        echo '<img src="' . base_url('imgs/' . $comercio->fondo) . '" width="200" height="200" /></br>';
                    else
                        echo '<p>No has subido ninguna imagen de fondo</p>';
                    ?>
                    <button class="button orange">Subir imagen</button
                    <?php
                    if ($comercio->fondo != '')
                        echo '<button class="button orange">Eliminar imagen de fondo</button>';
                    ?>
                    </p>
                    <p></p>
                    <p>
                        <span class="negritas">Fotos en categorías:</span></br>
                        Nombres y fotos <input type="radio" name="fotosCategorias" value="1"/>
                        Sólo nombre <input type="radio" name="fotosCategorias" value="0"/>
                    </p>
                </div>
            </div>
        </div>
        <div class="powered">
            <p>Un servicio de</br><a href="#"><img src="<?php echo base_url('imgs/mobilivery.png'); ?>" width="100" height="22" alt="Mobilivery"></a></p>
        </div>
    </body>
</html>
