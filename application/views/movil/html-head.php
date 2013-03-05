<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $comercio->nombre; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="<?php echo base_url('movil/css'); ?>" />
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
        <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
        <link href="<?php echo base_url('css/zocial.css');?>" rel="stylesheet" type="text/css" />
        <?php
        if (isset($map['js'])) {
            echo $map['js'];
            echo '
                <script src="'.base_url('js/underscore-min.js').'"></script>
                <script>
                function findComponent(result, type) {
                    var component = _.find(result.address_components, function(component) {
                      return _.include(component.types, type);
                    });
                    return component && component.short_name;
                }
                </script>'; 
        }
        ?>
    </head>
    <body>
        <div data-role="page" data-theme="<?php echo $comercio->temaPage; ?>">
