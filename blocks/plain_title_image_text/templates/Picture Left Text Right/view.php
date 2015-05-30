<?php  defined('C5_EXECUTE') or die("Access Denied.");
$nh = Loader::helper('navigation');
?>

<?php
    if (!empty($field_1_textbox_text)){
        echo '<div class="row">';
            echo '<div class="medium-12 large-12 columns">';
                echo '<div class="two-column-heading-container">';
                    echo '<div class="document-text">';
                        echo '<h3 class="article-title">';
                            echo htmlentities($field_1_textbox_text, ENT_QUOTES, APP_CHARSET);
                        echo '</h3>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }

    echo '<div class="row">';
        echo '<div class="medium-5 large-5 columns">';
        if (!empty($field_3_image)){
            if (!empty($field_3_image_externalLinkURL)) {
                echo '<a href="'.$this->controller->valid_url($field_3_image_externalLinkURL).'" target="_blank">';
            }
            echo '<img src="'.$field_3_image->src.'" width="'.$field_3_image->width.'" height="'.$field_3_image->height.'" alt="" style="border: #bababa solid 1px;"/>';
            if (!empty($field_3_image_externalLinkURL)) {
                echo '</a>';
            }
        }

        if (!empty($field_4_image)){
            if (!empty($field_4_image_internalLinkCID)) {
                echo '<a href="'.$nh->getLinkToCollection(Page::getByID($field_4_image_internalLinkCID), true).'>';
            }
            echo '<img src="'.$field_4_image->src.'" width="'.$field_4_image->width.'" height="'.$field_4_image->height.'" alt="" style="border: #bababa solid 1px;"/>';
            if (!empty($field_4_image_internalLinkCID)) {
                echo '</a>';
            }
        }
        echo '</div>';

        echo '<div class="medium-7 large-7 columns">';
        if (!empty($field_2_wysiwyg_content)) {
            echo '<div class="document-text">';
                echo $field_2_wysiwyg_content;
            echo '</div>';
        }
        echo '</div>';
    echo '</div>';
?>


