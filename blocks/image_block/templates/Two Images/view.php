<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>

<div class="row">
    <div class="small-12 large-12 columns">
        <div class="block-container">
            <div class="block-grid-container">
<?php

echo('<ul class="small-block-grid-2 medium-block-grid-2 block-advertising">');
if (!empty($field_1_image))
{
    echo('<li>');
    if(!empty($field_1_image_externalLinkURL))
    {
        echo('<a href="'.$this->controller->valid_url($field_1_image_externalLinkURL).'" target="_blank" title="'.$field_1_image_externalLinkURL.'">');
        echo('<img src="'.$field_1_image->src.'" width="'.$field_1_image->width.'" height="'.$field_1_image->height.'" alt="" style="border: #fff solid 1px;"/>');
        echo('</a>');
    }
    else
    {
        echo('<img src="'.$field_1_image->src.'" width="'.$field_1_image->width.'" height="'.$field_1_image->height.'" alt="" style="border: #fff solid 1px;"/>');
    }
    echo('</li>');
}
if(!empty($field_2_image))
{
    echo('<li>');
    if(!empty($field_2_image_externalLinkURL))
    {
        echo('<a href="'.$this->controller->valid_url($field_2_image_externalLinkURL).'" target="_blank" title="'.$field_2_image_externalLinkURL.'">');
        echo('<img src="'.$field_2_image->src.'" width="'.$field_2_image->width.'" height="'.$field_2_image->height.'" alt="" style="border: #fff solid 1px;"/>');
        echo('</a>');
    }
    else
    {
        echo('<img src="'.$field_2_image->src.'" width="'.$field_2_image->width.'" height="'.$field_2_image->height.'" alt="" style="border: #fff solid 1px;"/>');
    }
    echo('</li>');
}
if(!empty($field_3_image))
{
    echo('<li>');
    if(!empty($field_3_image_externalLinkURL))
    {
        echo('<a href="'.$this->controller->valid_url($field_3_image_externalLinkURL).'" target="_blank" title="'.$field_3_image_externalLinkURL.'">');
        echo('<img src="'.$field_3_image->src.'" width="'.$field_3_image->width.'" height="'.$field_3_image->height.'" alt="" style="border: #fff solid 1px;"/>');
        echo('</a>');
    }
    else
    {
        echo('<img src="'.$field_3_image->src.'" width="'.$field_3_image->width.'" height="'.$field_3_image->height.'" alt="" style="border: #fff solid 1px;"/>');
    }
    echo('</li>');
}
if(!empty($field_4_image))
{
    echo('<li>');
    if(!empty($field_4_image_externalLinkURL))
    {
        echo('<a href="'.$this->controller->valid_url($field_4_image_externalLinkURL).'" target="_blank" title="'.$field_4_image_externalLinkURL.'">');
        echo('<img src="'.$field_4_image->src.'" width="'.$field_4_image->width.'" height="'.$field_4_image->height.'" alt="" style="border: #fff solid 1px;"/>');
        echo('</a>');
    }
    else
    {
        echo('<img src="'.$field_4_image->src.'" width="'.$field_4_image->width.'" height="'.$field_4_image->height.'" alt="" style="border: #fff solid 1px;"/>');
    }
    echo('</li>');
}
if(!empty($field_5_image))
{
    echo('<li>');
    if(!empty($field_5_image_externalLinkURL))
    {
        echo('<a href="'.$this->controller->valid_url($field_5_image_externalLinkURL).'" target="_blank" title="'.$field_5_image_externalLinkURL.'">');
        echo('<img src="'.$field_5_image->src.'" width="'.$field_5_image->width.'" height="'.$field_5_image->height.'" alt="" style="border: #fff solid 1px;"/>');
        echo('</a>');
    }
    else
    {
        echo('<img src="'.$field_5_image->src.'" width="'.$field_5_image->width.'" height="'.$field_5_image->height.'" alt="" style="border: #fff solid 1px;"/>');
    }
    echo('</li>');
}
if(!empty($field_6_image))
{
    echo('<li>');
    if(!empty($field_6_image_externalLinkURL))
    {
        echo('<a href="'.$this->controller->valid_url($field_6_image_externalLinkURL).'" target="_blank" title="'.$field_6_image_externalLinkURL.'">');
        echo('<img src="'.$field_6_image->src.'" width="'.$field_6_image->width.'" height="'.$field_6_image->height.'" alt="" style="border: #fff solid 1px;"/>');
        echo('</a>');
    }
    else
    {
        echo('<img src="'.$field_6_image->src.'" width="'.$field_6_image->width.'" height="'.$field_6_image->height.'" alt="" style="border: #fff solid 1px;"/>');
    }
    echo('</li>');
}

echo('</ul>');

?>

            </div>
        </div>
    </div>
</div>


