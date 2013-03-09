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
        <meta name="robots" content="noindex">
        <script>
            function actualizar() {
                document.getElementById('configComercio').submit();
            }
            
            //            $(document).ready(function() {
            //                $(".eliminarHorario").click(function() {
            //                    $(this).closest('form')[0].submit();
            //                });
            //                
            //                $('#logo').change(function(){ 
            //                    console.log('fermeado');
            //                    // Cambiar ACTION de #infoComercio
            //                    $('#infoComercio').attr('action', '<?php echo site_url('cms/editarComercio/agregarLogo'); ?>');
            //                    $('#infoComercio').submit();
            //                });
            //
            //            });
        </script>
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
                    <form id="configComercio" method="POST" action="<?php echo site_url('cms/estiloMovil/actualizar'); ?>">
                        <h2>Estilo de sitio móvil</h2>
                        <div>
                            <span class="negritas">Tema de header: </span>
                            <select name="temaHeader">
                                <option value="a" <?php if ($comercio->temaHeader === 'a') echo 'selected="selected"'; ?>>a</option>
                                <option value="b" <?php if ($comercio->temaHeader === 'b') echo 'selected="selected"'; ?>>b</option>
                                <option value="c" <?php if ($comercio->temaHeader === 'c') echo 'selected="selected"'; ?>>c</option>
                                <option value="d" <?php if ($comercio->temaHeader === 'd') echo 'selected="selected"'; ?>>d</option>
                                <option value="e" <?php if ($comercio->temaHeader === 'e') echo 'selected="selected"'; ?>>e</option>
                            </select>
                        </div>
                        <div>
                            <span class="negritas">Tema de contenido: </span>
                            <select name="temaPage">
                                <option value="a" <?php if ($comercio->temaPage === 'a') echo 'selected="selected"'; ?>>a</option>
                                <option value="b" <?php if ($comercio->temaPage === 'b') echo 'selected="selected"'; ?>>b</option>
                                <option value="c" <?php if ($comercio->temaPage === 'c') echo 'selected="selected"'; ?>>c</option>
                                <option value="d" <?php if ($comercio->temaPage === 'd') echo 'selected="selected"'; ?>>d</option>
                                <option value="e" <?php if ($comercio->temaPage === 'e') echo 'selected="selected"'; ?>>e</option>
                            </select>
                        </div>
                        <div>
                            <span class="negritas">Tema de footer: </span>
                            <select name="temaFooter">
                                <option value="a" <?php if ($comercio->temaFooter === 'a') echo 'selected="selected"'; ?>>a</option>
                                <option value="b" <?php if ($comercio->temaFooter === 'b') echo 'selected="selected"'; ?>>b</option>
                                <option value="c" <?php if ($comercio->temaFooter === 'c') echo 'selected="selected"'; ?>>c</option>
                                <option value="d" <?php if ($comercio->temaFooter === 'd') echo 'selected="selected"'; ?>>d</option>
                                <option value="e" <?php if ($comercio->temaFooter === 'e') echo 'selected="selected"'; ?>>e</option>
                            </select>
                        </div>
                        <p></p>
                        <div>
                            <span class="negritas">Fotos en categorías:</span>
                            <p>
                                Nombres y fotos <input type="radio" name="fotosCategorias" value="1" <?php if ($comercio->fotosCategorias == 1) echo 'checked="checked"'; ?>/>
                                Sólo nombre <input type="radio" name="fotosCategorias" value="0" <?php if ($comercio->fotosCategorias != 1) echo 'checked="checked"'; ?>/>
                            </p>
                        </div>
                        <form>
                            <p class="negritas">Imagen de fondo:</p>
                            <div>
                                <?php
                                if ($comercio->fondo != '')
                                    echo '<img src="' . base_url('imgs/' . $comercio->fondo) . '" width="200" height="200" /></br>';
                                else
                                    echo '<p>No has subido ninguna imagen de fondo</p>';
                                ?>
                                <button class="button orange">Subir imagen</button>
                                <?php
                                if ($comercio->fondo != '')
                                    echo '<button class="button orange">Eliminar imagen de fondo</button>';
                                ?>
                            </div>
                        </form>
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
