<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Untitled Document</title>
        <link href="twoColElsLt.css" rel="stylesheet" type="text/css"><!--[if IE]>
        <style type="text/css"> 
        /* place css fixes for all versions of IE in this conditional comment */
        .twoColElsLt #sidebar1 { padding-top: 30px; }
        .twoColElsLt #mainContent { zoom: 1; padding-top: 15px; }
        /* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */
        </style>
        <![endif]-->
        <link href="<?php echo base_url('css/cms.css'); ?>" rel="stylesheet" type="text/css" />
        <?php echo $map['js']; ?>
    </head>

    <body class="twoColElsLt">
        <div id="container">
            <div id="sidebar1">
                <p><a href="<?php echo site_url('cms/editarComercio'); ?>" class="button orange">Editar info comercio</a></p>
                <p><a href="#" class="button orange">Editar categorías</a></p>
                <p><a href="#" class="button orange">Editar artículos</a></p>
                <p><a href="#" class="button orange">Editar características</a></p>
                <p><a href="#" class="button orange">Logout</a></p>
            </div>
            <div id="mainContent">
                <div id="contenido">
                    <label for="nombre">Nombre:</label>
                    <input id="nombre" value="<?php echo $comercio->nombre; ?>"/></br>
                    <label for="">Logo:</label></br>
                    <img src="<?php echo base_url('imgs/'.$comercio->logo); ?>" /></br>
                    <button id="">Cargar imagen</button></br>
                    <label for="">Radio de cobertura:</label>
                    <input id="" value="<?php echo $comercio->radioCobertura; ?>"/></br>
                    <label for="">Teléfono:</label>
                    <input id="" value="<?php echo $comercio->telefono; ?>"/></br>
                    <label for="">Horarios:</label>
                    <input id="" /></br>
                    <label for="">Foto:</label></br>
                    <img src="<?php echo base_url($comercio->foto); ?>" /></br>
                    <button id="">Cargar imagen</button></br>
                    <label for="">Información de minisitio:</label></br>
                    <textarea id=""><?php echo $comercio->info; ?></textarea>
                    <h3>Estilo de sitio móvil</h3>
                    <label for="">Tema de header:</label>
                    <input id="" value="<?php echo $comercio->temaHeader; ?>"/></br>
                    <label for="">Tema de contenido:</label>
                    <input id="" value="<?php echo $comercio->temaPage; ?>"/></br>
                    <label for="">Tema de footer:</label>
                    <input id="" value="<?php echo $comercio->temaFooter; ?>"/></br>
                    <label for="">Foto de fondo:</label>
                    <input id="" />
                    <h3>Ubicación</h3>
                    <?php echo $map['html']; ?>
                    <p><a id="" class="button orange">Actualizar</a></p>
                </div>
            </div>
        </div>
        <div class="powered">
            <p>Un servicio de</br><a href="#"><img src="<?php echo base_url('imgs/mobilivery.png'); ?>" width="100" height="22" alt="Mobilivery"></a></p>
        </div>
    </body>
</html>
