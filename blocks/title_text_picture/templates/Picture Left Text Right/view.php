<?php  defined('C5_EXECUTE') or die("Access Denied.");
$nh = Loader::helper('navigation');
?>
<div class="row">
    <div class="large-12 columns">
        <div class="block-container">
            <div class="content-container">
                <article>
                    <div class="row">
                        <div class="small-12 large-12 columns">
                            <div class="document-text">
                                <div class="article-title">
                                <?php  if (!empty($field_1_textbox_text)): ?>
                                    <?php  echo htmlentities($field_1_textbox_text, ENT_QUOTES, APP_CHARSET); ?>
                                <?php  endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-4 large-4 columns">
                            <div class="image-container">
                            <?php  if (!empty($field_3_image)): ?>
                                <?php  if (!empty($field_3_image_externalLinkURL)) { ?><a href="<?php  echo $this->controller->valid_url($field_3_image_externalLinkURL); ?>" target="_blank"><?php  } ?><img src="<?php  echo $field_3_image->src; ?>" width="<?php  echo $field_3_image->width; ?>" height="<?php  echo $field_3_image->height; ?>" alt="" style="border: #fff solid 1px;"/><?php  if (!empty($field_3_image_externalLinkURL)) { ?></a><?php  } ?>
                            <?php  endif; ?>
                            <?php  if (!empty($field_4_image)): ?>
                                <?php  if (!empty($field_4_image_internalLinkCID)) { ?><a href="<?php  echo $nh->getLinkToCollection(Page::getByID($field_4_image_internalLinkCID), true); ?>"><?php  } ?><img src="<?php  echo $field_4_image->src; ?>" width="<?php  echo $field_4_image->width; ?>" height="<?php  echo $field_4_image->height; ?>" alt="" style="border: #fff solid 1px;"/><?php  if (!empty($field_4_image_internalLinkCID)) { ?></a><?php  } ?>
                            <?php  endif; ?>
                            </div>
                        </div>
                        <div class="medium-8 large-8 columns">
                            <div class="document-text">
                            <?php  if (!empty($field_2_wysiwyg_content)): ?>
                                <?php  echo $field_2_wysiwyg_content; ?>
                            <?php  endif; ?>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
<div class="spacer">&nbsp;</div>