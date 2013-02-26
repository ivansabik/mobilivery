<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <link href="<?php echo base_url('css/cms.css'); ?>" rel="stylesheet" type="text/css" />
        <?php echo $map['js']; ?>
    <body>
        <div class="contenedor">
            <div class="contenedorMenu">
                <div class="menu">
                    <h3><a href="<?php echo site_url('cms/editarComercio'); ?>" id="editarComercio">Editar info comercio</a></h3>
                    <h3>Editar categorías</h3>
                    <h3>Editar artículos</h3>
                    <h3>Editar características</h3>
                    <h3>Logout</h3>
                </div>
            </div>
            <div class="contenedorContenido">
                <div class="contenido" id="contenido">
                    <label for="nombre">Nombre:</label>
                    <input id="nombre" value="<?php echo $comercio->nombre; ?>"/></br>
                    <label for="">Logo:</label></br>
                    <img src="<?php echo base_url($comercio->logo); ?>" /></br>
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
                    <button id="">Actualizar</button>
                </div>
            </div>
        </div>
    </body>
</html>
