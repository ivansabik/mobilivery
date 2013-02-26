<?php
include 'html-head.php';
include 'header-titulotexto.php';
?>
<?php
if (!$cliente->isLogged()) {
    $cliente->nombre = "";
    echo '<div class="tituloCentrado">
        <a href="' . site_url("movil/auth/login/Facebook") . '" data-ajax="false" class="zocial facebook" data-role="none">Entrar con Facebook</a></br>
        <a href="' . site_url("movil/auth/login/Twitter") . '" data-ajax="false" class="zocial twitter" data-role="none">Entrar con Twitter</a></br>
        <a href="' . site_url("movil/auth/login/Google") . '" data-ajax="false" class="zocial google" data-role="none">Entrar con Google</a>
        </div>';
}
?>

<div data-role="fieldcontain">
    <p class="elementosLabel">Nombre: 
        <input id="nombre" name="nombre" type="text" value="<?php echo $cliente->nombre; ?>"/>
    </p>
    <p class="elementosLabel">Teléfono: 
        <input id="telefono" name="nombre" type="text" value="<?php echo $cliente->telefono; ?>"/>
    </p>
</div>
<div data-role="fieldcontain">
    <p class="elementosLabel">Dirección:
        <a href="<?php echo site_url('movil/usuario/ubicacion/get'); ?>" data-role="button" data-ajax="false">Ubicación actual</a>
        <input name="direccion" type="text" id="inputBusquedaDir"/>
    </p>
    <?php echo $map['html']; ?>
    <p class="elementosLabel">Calle: 
        <input id="calle" name="calle" type="text" />
    </p>
    <p class="elementosLabel">Colonia: 
        <input id="colonia" name="col" type="text" />
    </p>
    <p class="elementosLabel">CP: 
        <input id="cp" name="cp" type="text" />
    </p>
    <p class="elementosLabel">Número: 
        <input id="numExt" name="num" type="text" />
    </p>
    <p class="elementosLabel">Interior: 
        <input id="numInt" name="numInt" type="text" />
        <a href="#" data-role="button" data-icon="check" >Guardar</a>
</div>
<div>
    <?php
    // Vincular otras cuentas
//    if ($cliente->isLogged() && !$cliente->idFacebook) {
//        echo '<a href="' . site_url("auth/login/agregar/Facebook") . '" data-ajax="false" class="zocial facebook" data-role="none">Vincular Facebook</a></br>';
//    }
//    if ($cliente->isLogged() && !$cliente->idTwitter) {
//        echo '<a href="' . site_url("auth/login/agregar/Twitter") . '" data-ajax="false" class="zocial twitter" data-role="none">Vincular Twitter</a></br>';
//    }
//    if ($cliente->isLogged() && !$cliente->idGoogle) {
//        echo '<a href="' . site_url("auth/login/agregar/Google") . '" data-ajax="false" class="zocial google" data-role="none">Vincular Google</a>';
//    }
    ?>
</div>
<?php
include 'powered.php';
include 'footer.php';
?>
