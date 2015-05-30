<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>

<ul class="inline-list">
    <?php
        if(!empty($field_1_image))
        {
            if(!empty($field_1_image_externalLinkURL))
            {
                echo '<li>';
                if (!empty($field_2_wysiwyg_content))
                {
                    echo '<a href="'.$this->controller->valid_url($field_1_image_externalLinkURL).'" target="_blank" >';
                    echo '<img src="'.$field_1_image->src.'" width="'.$field_1_image->width.'" height="'.$field_1_image->height.'" alt="" />';
                    echo '</a>';
                }
                else
                {
                    echo '<a href="'.$this->controller->valid_url($field_1_image_externalLinkURL).'" target="_blank" >';
                    echo '<img src="'.$field_1_image->src.'" width="'.$field_1_image->width.'" height="'.$field_1_image->height.'" alt="" />';
                    echo '</a>';
                }
                echo '<li>';
            }
        }

    if(!empty($field_3_image))
    {
        if(!empty($field_3_image_externalLinkURL))
        {
            echo '<li>';
            if (!empty($field_4_wysiwyg_content))
            {
                echo '<a href="'.$this->controller->valid_url($field_3_image_externalLinkURL).'" target="_blank">';
                echo '<img src="'.$field_3_image->src.'" width="'.$field_3_image->width.'" height="'.$field_3_image->height.'" alt="" />';
                echo '</a>';
            }
            else
            {
                echo '<a href="'.$this->controller->valid_url($field_3_image_externalLinkURL).'" target="_blank" >';
                echo '<img src="'.$field_3_image->src.'" width="'.$field_3_image->width.'" height="'.$field_3_image->height.'" alt="" />';
                echo '</a>';
            }
            echo '<li>';
        }
    }

    if(!empty($field_5_image))
    {
        if(!empty($field_5_image_externalLinkURL))
        {
            echo '<li>';
            if (!empty($field_6_wysiwyg_content))
            {
                echo '<a href="'.$this->controller->valid_url($field_5_image_externalLinkURL).'" target="_blank" >';
                echo '<img src="'.$field_5_image->src.'" width="'.$field_5_image->width.'" height="'.$field_5_image->height.'" alt="" />';
                echo '</a>';
            }
            else
            {
                echo '<a href="'.$this->controller->valid_url($field_5_image_externalLinkURL).'" target="_blank" >';
                echo '<img src="'.$field_5_image->src.'" width="'.$field_5_image->width.'" height="'.$field_5_image->height.'" alt="" />';
                echo '</a>';
            }
            echo '<li>';
        }
    }

    if(!empty($field_7_image))
    {
        if(!empty($field_7_image_externalLinkURL))
        {
            echo '<li>';
            if (!empty($field_8_wysiwyg_content))
            {
                echo '<a href="'.$this->controller->valid_url($field_7_image_externalLinkURL).'" target="_blank" >';
                echo '<img src="'.$field_7_image->src.'" width="'.$field_7_image->width.'" height="'.$field_7_image->height.'" alt="" />';
                echo '</a>';
            }
            else
            {
                echo '<a href="'.$this->controller->valid_url($field_7_image_externalLinkURL).'" target="_blank" >';
                echo '<img src="'.$field_7_image->src.'" width="'.$field_7_image->width.'" height="'.$field_7_image->height.'" alt="" />';
                echo '</a>';
            }
            echo '<li>';
        }
    }

    if(!empty($field_9_image))
    {
        if(!empty($field_9_image_externalLinkURL))
        {
            echo '<li>';
            if (!empty($field_10_wysiwyg_content))
            {
                echo '<a href="'.$this->controller->valid_url($field_9_image_externalLinkURL).'" target="_blank" >';
                echo '<img src="'.$field_9_image->src.'" width="'.$field_9_image->width.'" height="'.$field_9_image->height.'" alt="" />';
                echo '</a>';
            }
            else
            {
                echo '<a href="'.$this->controller->valid_url($field_9_image_externalLinkURL).'" target="_blank" >';
                echo '<img src="'.$field_9_image->src.'" width="'.$field_9_image->width.'" height="'.$field_9_image->height.'" alt="" />';
                echo '</a>';
            }
            echo '<li>';
        }
    }

    if(!empty($field_11_image))
    {
        if(!empty($field_9_image_externalLinkURL))
        {
            echo '<li>';
            if (!empty($field_12_wysiwyg_content))
            {
                echo '<a href="'.$this->controller->valid_url($field_9_image_externalLinkURL).'" target="_blank" >';
                echo '<img src="'.$field_11_image->src.'" width="'.$field_11_image->width.'" height="'.$field_11_image->height.'" alt="" />';
                echo '</a>';
            }
            else
            {
                echo '<a href="'.$this->controller->valid_url($field_9_image_externalLinkURL).'" target="_blank" >';
                echo '<img src="'.$field_11_image->src.'" width="'.$field_11_image->width.'" height="'.$field_11_image->height.'" alt="" />';
                echo '</a>';
            }
            echo '<li>';
        }
    }

    ?>
</ul>
