<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>

<?php
	if (!empty($field_1_textbox_text)){
		echo('<div class="row">');
			echo('<div class="large-12 columns">');
				echo('<div class="document-text"><h3 class="article-title">');
					echo htmlentities($field_1_textbox_text, ENT_QUOTES, APP_CHARSET);
				echo('</h3></div>');
			echo('</div>');
		echo('</div>');
	}

	if (!empty($field_2_wysiwyg_content)){
		echo('<div class="row">');
			echo('<div class="large-12 columns">');
				echo('<div class="document-text">');
					echo $field_2_wysiwyg_content;
				echo('</div>');
			echo('</div>');
		echo('</div>');
	}

?>
<div class="spacer"></div>

