<?php
list($width, $height) = getimagesize(base_url('imgs/' . $comercio->logo));
?>
<div data-role="header" data-theme="<?php echo $comercio->temaHeader; ?>" data-position="fixed">
    <?php
    if ($comercio->logo != '') {
        echo '<img src="' . base_url('imgs/' . $comercio->logo) . '" width="' . $width . '" height="' . $height . '"/>';
    } else {
        echo '<h1>' . $comercio->nombre . '</h1>';
    }
    ?>
</div>
<div data-role="content" data-theme="<?php echo $comercio->temaPage; ?>">