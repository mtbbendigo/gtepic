<?php
/**
 * Created by PhpStorm.
 * User: holly
 * Date: 13/12/2014
 * Time: 15:00
 */

defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<div class="row">
    <div class="large-12 columns">
        <div class="block-container">
            <div class="content-container">

                <div class="row">
                    <div class="medium-4 large-4 columns">
                        <div class="document-text">
                        <?php
                            $a = new Area('Add to main');
                            $a->display($c);
                        ?>
                        </div>
                    </div>
                    <div class="medium-8 large-8 columns">
                        <?php
                            $map = new Area('Add Google Map');
                            $map->display($c);
                        ?>
                        <div class="google-maps-directions"><a href="<?php echo $c->getAttribute('get_google_directions');?>" target="_blank">Open in Google Maps for Directions</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="spacer">&nbsp;</div>
    <?php
        $other = new Area('Add Content');
        $other->display($c);
    ?>

    <div class="spacer">&nbsp;</div>

<?php  $this->inc('elements/footer.php'); ?>