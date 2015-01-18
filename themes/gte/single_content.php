<?php
/**
 * Created by PhpStorm.
 * User: holly
 * Date: 03/01/2015
 * Time: 13:38
 *
 * This page provides a transparent container to add content too. It should be used when multiple blocks such as
 * FileSets need to be added to the page.
 */

defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

    <div class="row">
        <div class="large-12 columns">
            <div class="block-container">
                <div class="content-container">
                <?php
                    $a = new Area('Add to main');
                    $a->display($c);
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="spacer">&nbsp;</div>


<?php  $this->inc('elements/footer.php'); ?>