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
        <script>
            latitud = <?php echo $comercio->latitud; ?>;
            longitud = <?php echo $comercio->longitud; ?>;
            function actualizar() {
                document.getElementById('latitud').value = latitud;
                document.getElementById('longitud').value = longitud;
                document.getElementById('infoComercio').submit();
            }
        </script>
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
                    <form id="infoComercio" method="POST" action="<?php echo site_url('cms/editarComercio/actualizar'); ?>">
                        <h2>Información del comercio</h2>
                        <p>
                            <span class="negritas">Nombre: </span>
                            <input name="nombre" value="<?php echo $comercio->nombre; ?>"/>
                        </p>
                        <p>
                        <p class="negritas">Logo:</span></p>
                        <?php
                        if ($comercio->logo != '')
                            echo '<img src="' . base_url('imgs/' . $comercio->logo) . '" /></br>';
                        else
                            echo '<p>No has subido ningún logo</p>';
                        ?>
                        <a class="button orange">Subir logo</a>
                        <?php
                        if ($comercio->logo != '')
                            echo '<a href="'.site_url('cms/imagenes/logo/eliminar').'" class="button orange">Eliminar</a>';
                        ?>
                        </p>
                        <p>
                            <span class="negritas">Teléfono: </span>
                            <input name="telefono" value="<?php echo $comercio->telefono; ?>"/>
                        </p>
                        <p>
                        <p class="negritas">Foto del comercio:</p>
                        <?php
                        if ($comercio->foto != '')
                            echo '<img src="' . base_url('imgs/' . $comercio->foto) . '" /></br>';
                        else
                            echo '<p>No has subido ninguna foto de tu comercio</p>';
                        ?>
                        <a class="button orange">Subir foto</a>
                        <?php
                        if ($comercio->foto != '') {
                            echo '<a href="'.site_url('cms/imagenes/foto/eliminar').'" class="button orange">Eliminar</a>';
                        }
                        ?>
                        </p>
                        <p>
                            <span class="negritas">Descripción del comercio: </span>
                            <textarea name="descripcion" rows="10" cols="45"><?php echo $comercio->descripcion; ?></textarea>
                        </p>
                        <p>
                            <span class="negritas">Radio de cobertura (mts.): </span>
                            <input name="radioCobertura" value="<?php echo $comercio->radioCobertura; ?>"/>
                        </p>
                        <input id="latitud" name="latitud" type="hidden" value=""/>
                        <input id="longitud" name="longitud" type="hidden" value=""/>
                    </form>
                    <form id="agregarHorario" method="POST" action="<?php echo site_url('cms/editarComercio/agregarHorario'); ?>">
                        <div class="cuadroContenido">
                            <p class="negritas">Horarios:</p>
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
                            <a class="button orange">Agregar</a>
                            <?php
                            foreach ($comercio->horarios as $horarios) {
                                foreach ($horarios['horarios'] as $horario) {
                                    echo '<p>' . $horarios['textoDia'] . ': <a href="' . site_url('cms') . '"><img src="' . base_url('imgs/eliminar.png') . '" width="24" height="24" alt="Eliminar" class="eliminar" /></a><input disabled="disabled" value="' . $horario . '"></p>';
                                }
                            }
                            ?>
                        </div>
                    </form>
                    <p class="negritas">Ubicación</p>
                    <?php echo $map['html']; ?>
                    <p>
                        <a href="#" class="button orange" type="submit" onclick="actualizar();">Actualizar</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="powered">
            <p>Un servicio de</br><a href="#"><img src="<?php echo base_url('imgs/mobilivery.png'); ?>" width="100" height="22" alt="Mobilivery"></a></p>
        </div>
    </body>
</html>