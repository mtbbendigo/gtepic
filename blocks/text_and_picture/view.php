<?php  defined('C5_EXECUTE') or die("Access Denied.");
$nh = Loader::helper('navigation');
?>

<div class="row">
    <div class="large-12 columns">
        <div class="block-container">
            <div class="content-container">
                <div class="row">
                    <div class="small-12 large-12 columns">
                        <div class="document-text">
                            <article>
                            <?php  if (!empty($field_1_wysiwyg_content)): ?>
                                <?php  echo $field_1_wysiwyg_content; ?>
                            <?php  endif; ?>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 large-12 columns">
                        <div class="image-container">
                            <?php  if (!empty($field_2_image)): ?>
                                <?php  if (!empty($field_2_image_externalLinkURL)) { ?><a href="<?php  echo $this->controller->valid_url($field_2_image_externalLinkURL); ?>" target="_blank"><?php  } ?><img src="<?php  echo $field_2_image->src; ?>" width="<?php  echo $field_2_image->width; ?>" height="<?php  echo $field_2_image->height; ?>" alt="" style="border: #fff solid 1px;"/><?php  if (!empty($field_2_image_externalLinkURL)) { ?></a><?php  } ?>
                            <?php  endif; ?>

                            <?php  if (!empty($field_3_image)): ?>
                                <?php  if (!empty($field_3_image_internalLinkCID)) { ?><a href="<?php  echo $nh->getLinkToCollection(Page::getByID($field_3_image_internalLinkCID), true); ?>"><?php  } ?><img src="<?php  echo $field_3_image->src; ?>" width="<?php  echo $field_3_image->width; ?>" height="<?php  echo $field_3_image->height; ?>" alt="" style="border: #fff solid 1px;"/><?php  if (!empty($field_3_image_internalLinkCID)) { ?></a><?php  } ?>
                            <?php  endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="spacer">&nbsp;</div>


