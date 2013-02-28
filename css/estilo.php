<?php
include '../config_mobilivery.php';
// Falta transparencia de imagen de fondo
// Falta implementar font family en todo
header("Content-type: text/css; charset: UTF-8");
if (IMG_FONDO != "")
    echo
    '.ui-page {
background-image: url("' . IMG_FONDO . '");
background-attachment:fixed;
background-repeat: no-repeat;
background-size:cover;  
}';
?>
.nombre-categoria {
text-align: center;
font-size: 20px;
}

.ui-footer, .ui-header, .ui-block-a, .ui-block-b {
text-align: center;
}

.tituloCentrado {
text-align: center;
}

.elementosLabel {
font-size: 18px;

}

.fb label {
display: inline-block;
height: 40px;
padding-left: 34px;
background: url("../imgs/fb.png") no-repeat scroll 0 0 transparent;
}

.twitter label {
display: inline-block;
height: 33px;
padding-left: 34px;
background: url("../imgs/twitter.png") no-repeat scroll 0 0 transparent;
}

.google label {
display: inline-block;
height: 33px;
padding-left: 34px;
background: url("../imgs/google.png") no-repeat scroll 0 0 transparent;
}

img.eliminar {
    float: left;
}

.zocial {
margin: 4px;
width: 230px;
}

.nobold {
font-weight:normal;
}

a img {
    max-width: 95%;
    height: auto;
    width: auto\9; /* ie8 */
}

.powered, select {
    font-size: 9px;
    text-align: center;
}
