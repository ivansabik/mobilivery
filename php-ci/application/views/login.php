<?php
include 'html-head.php';
include 'header-titulotexto.php';
?>
<h1>Login</h1>
<h3><a href="<?php echo site_url('auth/login/Facebook');?>" data-ajax="false">Facebook</a></h3>
<h3><a href="<?php echo site_url('auth/login/Twitter');?>" data-ajax="false">Twitter</a></h3>
<h3><a href="<?php echo site_url('auth/login/Google');?>" data-ajax="false">Google</a></h3>
<div data-role="fieldcontain">
    <label for="usuario" class="elementosLabel">Usuario: </label>
    <input id="usuario" type="text" />
    <label for="pass" class="elementosLabel">Password: </label>
    <input id="pass" type="password" />
</div>
<?php
include 'footer.php';
?>
