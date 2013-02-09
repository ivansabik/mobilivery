<?php
include_once '../modelos/Cliente.php';
include_once '../config.php';
include_once '../modelos/Comercio.php';


$cliente = Cliente::load();
?>
<!DOCTYPE html>
<html>
    <?php include 'snippets/htmlHead.php'; ?>
    <body>
        <div data-role="page" data-theme="<?php echo DATA_THEME_PAGE; ?>">
        <?php include 'snippets/header.php'; ?>
             <div data-role="fieldcontain">
                <span class="elementosLabel">Nombre: </span>
                <input id="nombre" name="nombre" type="text" />
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
                <input id="fb" name="fb" type="text" />
                </div>
                <div class="elementosLabel twitter"><label for="twitter">Twitter: </label> 
                <input id="twitter" name="twitter" type="text" />
                </p>
            </div>
            <?php include 'snippets/footer.php'; ?>
        </div>   
    </body>
</html>