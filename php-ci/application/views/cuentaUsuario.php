<?php
//echo '<h1>Datos</h1>';
//echo '<pre>';
//var_dump($cliente);
//echo '</pre>';
?>
<?php
include 'html-head.php';
include 'header-titulotexto.php';
?>
<div data-role="fieldcontain">
    <span class="elementosLabel">Nombre: </span>
    <input id="nombre" name="nombre" type="text" value="<?php echo $cliente->nombre;?>"/>
</div>
<div data-role="fieldcontain">
    <p class="elementosLabel">Calle: 
        <input id="calle" name="calle" type="text" />
    </p>
    <p class="elementosLabel">Número: 
        <input id="numeroCalle" name="numeroCalle" type="text" />
    </p>
    <p class="elementosLabel">Interior: 
        <input id="numeroCalle" name="numeroCalle" type="text" />
        </>
    <p class="elementosLabel">Colonia: 
        <input id="colonia" name="colonia" type="text" />
    </p>
    <a href="#" data-role="button" data-icon="search" >Ubicación en mapa</a>
    <a href="#" data-role="button" data-icon="check" >Guardar</a>
</div>
<div data-role="fieldcontain">
    <div class="elementosLabel fb"><label for="fb">Facebook: </label> 
        <input id="fb" name="fb" type="text" value="<?php echo $cliente->idFacebook;?>" />
    </div>
    <div class="elementosLabel twitter"><label for="twitter">Twitter: </label> 
        <input id="twitter" name="twitter" type="text" value="<?php echo $cliente->idTwitter;?>" />
        </p>
    </div>
    <div class="elementosLabel google"><label for="google">Google: </label> 
        <input id="google" name="google" type="text" value="<?php echo $cliente->idGoogle;?>" />
        </p>
    </div>
</div>
<?php
include 'footer.php';
?>
