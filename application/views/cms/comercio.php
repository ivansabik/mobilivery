<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $comercio->nombre; ?> Mobilivery CMS</title>
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
                    <p>Logo:</p>
                    <img src="<?php echo base_url('imgs/' . $comercio->logo); ?>" /></br>
                    <button class="button orange">Cargar imagen</button></br>
                    <p>Radio de cobertura (mts.):
                    <input id="" value="<?php echo $comercio->radioCobertura; ?>"/></p>
                    <p>Teléfono:
                    <input id="" value="<?php echo $comercio->telefono; ?>"/></p>
                    <p>Horarios:</p>
                    <div id="agregarHorario">
                        <div>Día: 
                            <select name="dia">
                                <option value="1">Lunes</option>
                                <option value="2">Martes</option>
                                <option value="3">Miércoles</option>
                                <option value="4">Jueves</option>
                                <option value="5">Viernes</option>
                                <option value="6">Sábado</option>
                                <option value="7">Domingo</option>
                            </select>
                            </br>
                            <span>Apertura: </span>
                            <select name="hApertura">
                                <?php
                                for ($hora = 0; $hora <= 23; $hora++)
                                    echo '<option value="' . $hora . '">' . $hora . '</option>';
                                ?>
                            </select>
                            <span> : </span>
                            <select name="mApertura">
                                <option value="00">00</option>
                                <option value="30">30</option>
                            </select>
                            </br>
                            <span>Cierre: </span>
                            <select name="hCierre">
                                <?php
                                for ($hora = 0; $hora <= 23; $hora++)
                                    echo '<option value="' . $hora . '">' . $hora . '</option>';
                                ?>
                            </select>
                            <span> : </span>
                            <select name="mCierre">
                                <option value="00">00</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                        <button class="button orange">Agregar</button>
                        <p>Lunes: <a href="<?php echo site_url('cms'); ?>"><img src="<?php echo base_url('imgs/eliminar.png'); ?>" width="24" height="24" alt="Eliminar" class="eliminar" /></a><input value="" disabled="disabled"></p>
                        <p>Lunes: <a href="<?php echo site_url('cms'); ?>"><img src="<?php echo base_url('imgs/eliminar.png'); ?>" width="24" height="24" alt="Eliminar" class="eliminar" /></a><input value="" disabled="disabled"></p>
                    </div>
                    <p>Foto:</p>
                    <img src="<?php echo base_url($comercio->foto); ?>" /></br>
                    <button class="button orange">Cargar imagen</button></br>
                    <p>Información de minisitio:</p>
                    <textarea id="" rows="10" cols="45"><?php echo $comercio->info; ?></textarea>
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
