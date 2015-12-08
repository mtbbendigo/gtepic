<?php  defined('C5_EXECUTE') or die("Access Denied.");
$nh = Loader::helper('navigation');
?>

<div class="row">
    <div class="small-12 large-12 columns">
        <div class="block-container">
            <div class="content-container">
                <div class="row">
                	<div class="medium-3 large-3 columns">
                        <div class="image-container">
                        <?php  if (!empty($field_2_image)): ?>
                            <?php  if (!empty($field_2_image_externalLinkURL)) { ?><a href="<?php  echo $this->controller->valid_url($field_2_image_externalLinkURL); ?>" target="_blank"><?php  } ?><img src="<?php  echo $field_2_image->src; ?>" width="<?php  echo $field_2_image->width; ?>" height="<?php  echo $field_2_image->height; ?>" alt="" style="border: #fff solid 1px;"/><?php  if (!empty($field_2_image_externalLinkURL)) { ?></a><?php  } ?>
                        <?php  endif; ?>

                        <?php  if (!empty($field_3_image)): ?>
                            <?php  if (!empty($field_3_image_internalLinkCID)) { ?><a href="<?php  echo $nh->getLinkToCollection(Page::getByID($field_3_image_internalLinkCID), true); ?>"><?php  } ?><img src="<?php  echo $field_3_image->src; ?>" width="<?php  echo $field_3_image->width; ?>" height="<?php  echo $field_3_image->height; ?>" alt="" style="border: #fff solid 1px;"/><?php  if (!empty($field_3_image_internalLinkCID)) { ?></a><?php  } ?>
                        <?php  endif; ?>
                        </div>
                    </div>
                    <div class="medium-9 large-9 columns">
                        <div class="document-text">
                        	<div class="white-text">
								<article>
                                <?php  if (!empty($field_1_wysiwyg_content)): ?>
                                    <?php  echo $field_1_wysiwyg_content; ?>
                                <?php  endif; ?>
                            	</article>                        	
                        	</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="yellow-band"><!-- Yellow Band -->
                        <div class="yellow-band-text">
                            <?php  if (!empty($field_4_link_url)):
                                $link_url = $this->controller->valid_url($field_4_link_url);
                                $link_text = empty($field_4_link_text) ? $field_4_link_url : htmlentities($field_4_link_text, ENT_QUOTES, APP_CHARSET);
                                ?>
                                <a href="<?php  echo $link_url; ?>" target="_blank"><?php  echo $link_text; ?></a>
                            <?php  endif; ?>

                            <?php  if (!empty($field_5_link_cID)):
                                $link_url = $nh->getLinkToCollection(Page::getByID($field_5_link_cID), true);
                                $link_text = empty($field_5_link_text) ? $link_url : htmlentities($field_5_link_text, ENT_QUOTES, APP_CHARSET);
                                ?>
                                <a href="<?php  echo $link_url; ?>"><?php  echo $link_text; ?></a>
                            <?php  endif; ?>
                        </div>
                    </div><!-- End Yellow Band -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="spacer"></div>


