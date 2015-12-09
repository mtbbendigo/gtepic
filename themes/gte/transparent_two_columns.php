<?php
/**
 * Created by PhpStorm.
 * User: holly
 * Date: 18/02/2015
 * Time: 21:02
 */

defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

    <div class="row">
        <div class="large-12 columns">
            <div class="block-container">
                <div class="content-container">
                	<?php $title = $c->getCollectionAttributeValue('two_column_title'); 
						if($title !== '')
						{
							echo '<div class="row">';
							echo '<div class="medium-12 large-12 columns">';
							echo '<div class="document-text">';
							echo '<div class="article-title">'.$title.'</div>';
							echo '</div>';
							echo '</div>';
							echo '</div>';
						}
					?>
                		
                    <div class="row">
                        <div class="large-6 columns">
                            <?php
                                $a = new Area('Add to left');
                                $a->display($c);
                            ?>
                        </div>
                        <div class="large-6 columns">
                            <?php
                                $a = new Area('Add to right');
                                $a->display($c);
                            ?>
                        </div>
                    </div>
                    <div class="spacer">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
    <div class="spacer">&nbsp;</div>


<?php  $this->inc('elements/footer.php'); ?>