<?php
/**
 * Created by PhpStorm.
 * User: holly
 * Date: 13/12/2014
 * Time: 14:55
 */

defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

    <?php
        $a = new Area('Add to News');
        $a->display($c);
    ?>

    <div class="spacer">&nbsp;</div>


<?php  $this->inc('elements/footer.php'); ?>