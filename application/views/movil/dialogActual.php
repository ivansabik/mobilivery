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
        <div data-role="dialog">
            <div data-role="header" data-theme="<?php echo $comercio->temaHeader; ?>">
                <h3>Artículo agregado</h3>
            </div>
            <div data-role="content" data-theme="<?php echo $comercio->temaPage; ?>">
                <h3>El artículo fue agregado a su orden</h3>
                <a href="<?php echo site_url('movil/actual/ver');?>" data-role="button">Ver mi orden</a>
                <a href="javascript:history.go(-2)" data-role="button">Ir a categorías</a>
            </div>
        </div>
    </body>
</html>