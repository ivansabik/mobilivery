<?php
//var_dump($orden);
?>
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
        <div data-role="dialog">
            <div data-role="header" data-theme="<?php echo $data_theme_header; ?>">
                <h3>Articulo agregado</h3>
            </div>
            <div data-role="content" data-theme="<?php echo $data_theme_page; ?>">
                <h3>El artículo fue agregado a su orden</h3>
                <a href="#" data-role="button">Ver mi orden</a>
                <a href="#" data-role="button" data-rel="back">Ir a categorías</a>
            </div>
        </div>
    </body>
</html>