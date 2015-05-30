<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>

<?php
echo ('<div class="cyclescape-image-container">');
echo ('<div class="row">');
echo ('<div class="medium-9 large-9 columns">');

	if (!empty($field_1_image)){

		if (!empty($field_1_image_externalLinkURL)) {
			echo '<a href="'.$this->controller->valid_url($field_1_image_externalLinkURL).'" target="_blank">';
		}
		echo '<img src="'.$field_1_image->src.'" width="'.$field_1_image->width.'" height="'.$field_1_image->height.'" alt="" />';
		if (!empty($field_1_image_externalLinkURL)) {
			echo '</a>';
		}

	}
echo ('</div>');

echo ('<div class="medium-3 large-3 columns">');

	echo ('<ul class="small-block-grid-2 medium-block-grid-1 cyclesacpe-sm-img-container">');
	if (!empty($field_2_image)){
		echo ('<li>');
		if (!empty($field_2_image_externalLinkURL)) {
			echo '<a href="'.$this->controller->valid_url($field_2_image_externalLinkURL).'" target="_blank">';
		}
		echo '<img src="'.$field_2_image->src.'" width="'.$field_2_image->width.'" height="'.$field_2_image->height.'" alt="" />';
		if (!empty($field_2_image_externalLinkURL)) {
			echo '</a>';
		}
		echo ('</li>');
	}

	if (!empty($field_3_image)){
		echo ('<div class="cyclescape-bttm-rgt-img"">');
		echo ('<li>');
		if (!empty($field_3_image_externalLinkURL)) {
			echo '<a href="'.$this->controller->valid_url($field_3_image_externalLinkURL).'" target="_blank">';
		}
		echo '<img src="'.$field_3_image->src.'" width="'.$field_3_image->width.'" height="'.$field_3_image->height.'" alt="" />';
		if (!empty($field_3_image_externalLinkURL)) {
			echo '</a>';
		}
		echo ('</li>');
		echo ('</div>');
	}
	echo ('</ul>');

echo ('</div>');
echo ('</div>');
echo ('</div>');

?>


