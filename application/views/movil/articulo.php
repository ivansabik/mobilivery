<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="<?php echo base_url('css/estilo.php'); ?>" />
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
        <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
    </head>
    <body>
        <div data-role="page">
            <?php
            include 'header-titulotexto.php';
            ?>
            <div class="tituloCentrado">
                <h2><?php echo $articuloMenu->nombre; ?></h2>
                <img src="<?php echo base_url($articuloMenu->foto); ?>" />
            </div>
            <!--<h4>Descripción</h4>-->
            <ul data-role="listview" data-inset="true">
                <li><?php echo $articuloMenu->descripcion; ?></li>
            </ul>
            <h4>
                <?php echo 'Precio: <span class="nobold">$ ' . $articuloMenu->precio . '</span>'; ?>
            </h4>
            <!-- Características del artículo !-->
            <form action="<?php echo site_url('movil/actual/agregar/'); ?>" method="post" data-ajax="false" id="frmAgregar">
                <?php
                foreach ($articuloMenu->caracteristicas as $caracteristica) {
                    echo $caracteristica->toHtml();
                }
                ?>
                <h4>Cantidad:</h4>
                <input type="range" name="cantidad" value="1" min="1" max="15"  />
                <div data-role="fieldcontain">
                    <h4>Comentarios</h4>
                    <textarea name="comentarios">Ej. Sin chile, sin empanizar, al tiempo</textarea>
                </div>
                <div>
                    <h2>Subtotal: $</h2>
                </div>
                <button type="submit">Agregar a orden</button>
                <input type="hidden" name="idArticulo" value="<?php echo $articuloMenu->id; ?>">
                <input type="hidden" name="nombreArticulo" value="<?php echo $articuloMenu->nombre; ?>">
                <input type="hidden" name="nombreCategoria" value="<?php echo $titulo; ?>">
            </form>
            <?php
            include 'footer.php';
            ?>