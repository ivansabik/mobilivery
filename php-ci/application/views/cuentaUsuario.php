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
    <p class="elementosLabel">Nombre: 
    <input id="nombre" name="nombre" type="text" value="<?php echo $cliente->nombre; ?>"/>
    </p>
    <p class="elementosLabel">Teléfono: 
    <input id="telefono" name="nombre" type="text" value="<?php echo $cliente->telefono; ?>"/>
    </p>
</div>
<div data-role="fieldcontain">
    <p class="elementosLabel">Dirección: 
        <input name="direccion" type="text" id="inputBusquedaDir"/>
        <?php echo $map['html']; ?>
    </p>
    <p class="elementosLabel">Calle: 
        <input id="numeroCalle" name="calle" type="text" />
    </p>
    <p class="elementosLabel">Colonia: 
        <input id="numeroCalle" name="col" type="text" />
    </p>
    <p class="elementosLabel">CP: 
        <input id="numeroCalle" name="cp" type="text" />
    </p>
    <p class="elementosLabel">Número: 
        <input id="numeroCalle" name="num" type="text" />
    </p>
    <p class="elementosLabel">Interior: 
        <input id="numeroCalle" name="numInt" type="text" />
    <a href="#" data-role="button" data-icon="check" >Guardar</a>
</div>
<div data-role="fieldcontain">
    <div class="elementosLabel fb"><label for="fb">Facebook: </label> 
        <input id="fb" name="fb" type="text" value="<?php echo $cliente->idFacebook; ?>" />
    </div>
    <div class="elementosLabel twitter"><label for="twitter">Twitter: </label> 
        <input id="twitter" name="twitter" type="text" value="<?php echo $cliente->idTwitter; ?>" />
        </p>
    </div>
    <div class="elementosLabel google"><label for="google">Google: </label> 
        <input id="google" name="google" type="text" value="<?php echo $cliente->idGoogle; ?>" />
        </p>
    </div>
</div>
<?php
include 'footer.php';
?>
