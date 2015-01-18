<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

    <?php
        $a = new Area('Add to main');
        $a->display($c);
    ?>

    <div class="spacer">&nbsp;</div>


<?php  $this->inc('elements/footer.php'); ?>