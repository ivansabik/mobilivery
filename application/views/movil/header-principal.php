<?php
    list($width, $height) = getimagesize(base_url('imgs/'.$comercio->logo));
?>
<div data-role="header" data-theme="<?php echo $comercio->temaHeader; ?>" data-position="fixed">
    <img src="<?php echo base_url('imgs/'.$comercio->logo); ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"/>
</div>
<div data-role="content" data-theme="<?php echo $comercio->temaPage; ?>">