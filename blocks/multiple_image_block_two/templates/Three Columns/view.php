<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>

<div class="row">
	<div class="small-12 large-12 columns">
		<div class="block-container">
			<div class="block-grid-container">

<?php

	if (!empty($field_1_textbox_text)){
	echo '<div class="content-container"><div class="document-text">';
			echo '<div class="article-title">'.htmlentities($field_1_textbox_text, ENT_QUOTES, APP_CHARSET).'</div>';
			echo '</div></div>';
	}

	echo('<ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-3 block-advertising">');

	if (!empty($field_2_image)) {
	echo ('<li>');
		if (!empty($field_2_image_externalLinkURL)) {
		echo '<a href="'.$this->controller->valid_url($field_2_image_externalLinkURL).'" target="_blank">';
			}
			echo '<img src="'.$field_2_image->src.'" width="'.$field_2_image->width.'" height="'.$field_2_image->height.'" alt="" style="border: #bababa solid 1px;" />';
			if (!empty($field_2_image_externalLinkURL)) {
			echo '</a>';
		}
		echo ('</li>');
	}

	if (!empty($field_3_image)) {
		echo ('<li>');
		if (!empty($field_3_image_externalLinkURL)) {
			echo '<a href="'.$this->controller->valid_url($field_3_image_externalLinkURL).'" target="_blank">';
		}
		echo '<img src="'.$field_3_image->src.'" width="'.$field_3_image->width.'" height="'.$field_3_image->height.'" alt="" style="border: #bababa solid 1px;" />';
		if (!empty($field_3_image_externalLinkURL)) {
			echo '</a>';
		}
		echo ('</li>');
	}

	if (!empty($field_4_image)) {
		echo ('<li>');
		if (!empty($field_4_image_externalLinkURL)) {
			echo '<a href="'.$this->controller->valid_url($field_4_image_externalLinkURL).'" target="_blank">';
		}
		echo '<img src="'.$field_4_image->src.'" width="'.$field_4_image->width.'" height="'.$field_4_image->height.'" alt="" style="border: #bababa solid 1px;" />';
		if (!empty($field_4_image_externalLinkURL)) {
			echo '</a>';
		}
		echo ('</li>');
	}

	if (!empty($field_5_image)) {
		echo ('<li>');
		if (!empty($field_5_image_externalLinkURL)) {
			echo '<a href="'.$this->controller->valid_url($field_5_image_externalLinkURL).'" target="_blank">';
		}
		echo '<img src="'.$field_5_image->src.'" width="'.$field_5_image->width.'" height="'.$field_5_image->height.'" alt="" style="border: #bababa solid 1px;" />';
		if (!empty($field_5_image_externalLinkURL)) {
			echo '</a>';
		}
		echo ('</li>');
	}

	if (!empty($field_6_image)) {
		echo ('<li>');
		if (!empty($field_6_image_externalLinkURL)) {
			echo '<a href="'.$this->controller->valid_url($field_6_image_externalLinkURL).'" target="_blank">';
		}
		echo '<img src="'.$field_6_image->src.'" width="'.$field_6_image->width.'" height="'.$field_6_image->height.'" alt="" style="border: #bababa solid 1px;" />';
		if (!empty($field_6_image_externalLinkURL)) {
			echo '</a>';
		}
		echo ('</li>');
	}

	if (!empty($field_7_image)) {
		echo ('<li>');
		if (!empty($field_7_image_externalLinkURL)) {
			echo '<a href="'.$this->controller->valid_url($field_7_image_externalLinkURL).'" target="_blank">';
		}
		echo '<img src="'.$field_7_image->src.'" width="'.$field_7_image->width.'" height="'.$field_7_image->height.'" alt="" style="border: #bababa solid 1px;" />';
		if (!empty($field_7_image_externalLinkURL)) {
			echo '</a>';
		}
		echo ('</li>');
	}

	if (!empty($field_8_image)) {
		echo ('<li>');
		if (!empty($field_8_image_externalLinkURL)) {
			echo '<a href="'.$this->controller->valid_url($field_8_image_externalLinkURL).'" target="_blank">';
		}
		echo '<img src="'.$field_8_image->src.'" width="'.$field_8_image->width.'" height="'.$field_8_image->height.'" alt="" style="border: #bababa solid 1px;" />';
		if (!empty($field_8_image_externalLinkURL)) {
			echo '</a>';
		}
		echo ('</li>');
	}

	if (!empty($field_9_image)) {
		echo ('<li>');
		if (!empty($field_9_image_externalLinkURL)) {
			echo '<a href="'.$this->controller->valid_url($field_9_image_externalLinkURL).'" target="_blank">';
		}
		echo '<img src="'.$field_9_image->src.'" width="'.$field_9_image->width.'" height="'.$field_9_image->height.'" alt="" style="border: #bababa solid 1px;" />';
		if (!empty($field_9_image_externalLinkURL)) {
			echo '</a>';
		}
		echo ('</li>');
	}

	if (!empty($field_10_image)) {
		echo ('<li>');
		if (!empty($field_10_image_externalLinkURL)) {
			echo '<a href="'.$this->controller->valid_url($field_10_image_externalLinkURL).'" target="_blank">';
		}
		echo '<img src="'.$field_10_image->src.'" width="'.$field_10_image->width.'" height="'.$field_10_image->height.'" alt="" style="border: #bababa solid 1px;" />';
		if (!empty($field_10_image_externalLinkURL)) {
			echo '</a>';
		}
		echo ('</li>');
	}

	if (!empty($field_11_image)) {
		echo ('<li>');
		if (!empty($field_11_image_externalLinkURL)) {
			echo '<a href="'.$this->controller->valid_url($field_11_image_externalLinkURL).'" target="_blank">';
		}
		echo '<img src="'.$field_11_image->src.'" width="'.$field_11image->width.'" height="'.$field_11_image->height.'" alt="" style="border: #bababa solid 1px;" />';
		if (!empty($field_11_image_externalLinkURL)) {
			echo '</a>';
		}
		echo ('</li>');
	}

	if (!empty($field_12_image)) {
		echo ('<li>');
		if (!empty($field_12_image_externalLinkURL)) {
			echo '<a href="'.$this->controller->valid_url($field_12_image_externalLinkURL).'" target="_blank">';
		}
		echo '<img src="'.$field_12_image->src.'" width="'.$field_12_image->width.'" height="'.$field_12_image->height.'" alt="" style="border: #bababa solid 1px;" />';
		if (!empty($field_12_image_externalLinkURL)) {
			echo '</a>';
		}
		echo ('</li>');
	}

	if (!empty($field_13_image)) {
		echo ('<li>');
		if (!empty($field_13_image_externalLinkURL)) {
			echo '<a href="'.$this->controller->valid_url($field_13_image_externalLinkURL).'" target="_blank">';
		}
		echo '<img src="'.$field_13_image->src.'" width="'.$field_13_image->width.'" height="'.$field_13_image->height.'" alt="" style="border: #bababa solid 1px;" />';
		if (!empty($field_13_image_externalLinkURL)) {
			echo '</a>';
		}
		echo ('</li>');
	}

	if (!empty($field_14_image)) {
		echo ('<li>');
		if (!empty($field_14_image_externalLinkURL)) {
			echo '<a href="'.$this->controller->valid_url($field_14_image_externalLinkURL).'" target="_blank">';
		}
		echo '<img src="'.$field_14_image->src.'" width="'.$field_14_image->width.'" height="'.$field_14_image->height.'" alt="" style="border: #bababa solid 1px;" />';
		if (!empty($field_14_image_externalLinkURL)) {
			echo '</a>';
		}
		echo ('</li>');
	}

	if (!empty($field_15_image)) {
		echo ('<li>');
		if (!empty($field_15_image_externalLinkURL)) {
			echo '<a href="'.$this->controller->valid_url($field_15_image_externalLinkURL).'" target="_blank">';
		}
		echo '<img src="'.$field_15_image->src.'" width="'.$field_15_image->width.'" height="'.$field_15_image->height.'" alt="" style="border: #bababa solid 1px;" />';
		if (!empty($field_15_image_externalLinkURL)) {
			echo '</a>';
		}
		echo ('</li>');
	}

	if (!empty($field_16_image)) {
		echo ('<li>');
		if (!empty($field_16_image_externalLinkURL)) {
			echo '<a href="'.$this->controller->valid_url($field_16_image_externalLinkURL).'" target="_blank">';
		}
		echo '<img src="'.$field_16_image->src.'" width="'.$field_16_image->width.'" height="'.$field_16_image->height.'" alt="" style="border: #bababa solid 1px;" />';
		if (!empty($field_16_image_externalLinkURL)) {
			echo '</a>';
		}
		echo ('</li>');
	}

	if (!empty($field_17_image)) {
		echo ('<li>');
		if (!empty($field_17_image_externalLinkURL)) {
			echo '<a href="'.$this->controller->valid_url($field_17_image_externalLinkURL).'" target="_blank">';
		}
		echo '<img src="'.$field_17_image->src.'" width="'.$field_17_image->width.'" height="'.$field_17_image->height.'" alt="" style="border: #bababa solid 1px;" />';
		if (!empty($field_17_image_externalLinkURL)) {
			echo '</a>';
		}
		echo ('</li>');
	}

	if (!empty($field_18_image)) {
		echo ('<li>');
		if (!empty($field_18_image_externalLinkURL)) {
			echo '<a href="'.$this->controller->valid_url($field_18_image_externalLinkURL).'" target="_blank">';
		}
		echo '<img src="'.$field_18_image->src.'" width="'.$field_18_image->width.'" height="'.$field_18_image->height.'" alt="" style="border: #bababa solid 1px;" />';
		if (!empty($field_18_image_externalLinkURL)) {
			echo '</a>';
		}
		echo ('</li>');
	}

	if (!empty($field_19_image)) {
		echo ('<li>');
		if (!empty($field_19_image_externalLinkURL)) {
			echo '<a href="'.$this->controller->valid_url($field_19_image_externalLinkURL).'" target="_blank">';
		}
		echo '<img src="'.$field_19_image->src.'" width="'.$field_19_image->width.'" height="'.$field_19_image->height.'" alt="" style="border: #bababa solid 1px;" />';
		if (!empty($field_19_image_externalLinkURL)) {
			echo '</a>';
		}
		echo ('</li>');
	}

	if (!empty($field_20_image)) {
		echo ('<li>');
		if (!empty($field_20_image_externalLinkURL)) {
			echo '<a href="'.$this->controller->valid_url($field_20_image_externalLinkURL).'" target="_blank">';
		}
		echo '<img src="'.$field_20_image->src.'" width="'.$field_20_image->width.'" height="'.$field_20_image->height.'" alt="" style="border: #bababa solid 1px;" />';
		if (!empty($field_20_image_externalLinkURL)) {
			echo '</a>';
		}
		echo ('</li>');
	}

	if (!empty($field_21_image)) {
		echo ('<li>');
		if (!empty($field_21_image_externalLinkURL)) {
			echo '<a href="'.$this->controller->valid_url($field_21_image_externalLinkURL).'" target="_blank">';
		}
		echo '<img src="'.$field_21_image->src.'" width="'.$field_21_image->width.'" height="'.$field_21_image->height.'" alt="" style="border: #bababa solid 1px;" />';
		if (!empty($field_21_image_externalLinkURL)) {
			echo '</a>';
		}
		echo ('</li>');
	}

	echo ('</ul>');

?>

			</div>
		</div>
	</div>
</div>

<div class="spacer"></div>


