</div>
<div data-role="footer" data-position="fixed" data-theme="<?php echo $comercio->temaFooter; ?>">
    <div data-role="navbar">
        <ul>
            <li><a href="tel:<?php echo $comercio->telefono; ?>"><img src="<?php echo base_url('imgs/telefono.png'); ?>" /></a></li>
            <li><a href="<?php echo site_url('movil/actual/ver'); ?>"><img src="<?php echo base_url('imgs/orden.png'); ?>" data-ajax="false"/></a></li>
            <li><a href="<?php echo site_url('movil/usuario/ver'); ?>" data-ajax="false"><img src="<?php echo base_url('imgs/cuenta.png'); ?>" /></a></li>
            <li><a href="#"><img src="<?php echo base_url('imgs/social.png'); ?>" /></a></li>
            <li><a href="<?php echo site_url('movil/infoComercio'); ?>" data-ajax="false"><img src="<?php echo base_url('imgs/acerca.png'); ?>" /></a></li>
        </ul>
    </div>
</div>
</div>   
</body>
</html>
