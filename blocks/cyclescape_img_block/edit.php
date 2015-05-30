<?php  defined('C5_EXECUTE') or die("Access Denied.");
$al = Loader::helper('concrete/asset_library');
?>

<style type="text/css" media="screen">
	.ccm-block-field-group h2 { margin-bottom: 5px; }
	.ccm-block-field-group td { vertical-align: middle; }
</style>

<div class="ccm-block-field-group">
	<h2>Image1</h2>
	<?php  echo $al->image('field_1_image_fID', 'field_1_image_fID', 'Choose Image', $field_1_image); ?>

	<table border="0" cellspacing="3" cellpadding="0" style="width: 95%; margin-top: 5px;">
		<tr>
			<td align="right" nowrap="nowrap"><label for="field_1_image_externalLinkURL">Link to URL:</label>&nbsp;</td>
			<td align="left" style="width: 100%;"><?php  echo $form->text('field_1_image_externalLinkURL', $field_1_image_externalLinkURL, array('style' => 'width: 100%;')); ?></td>
		</tr>
	</table>
</div>

<div class="ccm-block-field-group">
	<h2>Right Top Image</h2>
	<?php  echo $al->image('field_2_image_fID', 'field_2_image_fID', 'Choose Image', $field_2_image); ?>

	<table border="0" cellspacing="3" cellpadding="0" style="width: 95%; margin-top: 5px;">
		<tr>
			<td align="right" nowrap="nowrap"><label for="field_2_image_externalLinkURL">Link to URL:</label>&nbsp;</td>
			<td align="left" style="width: 100%;"><?php  echo $form->text('field_2_image_externalLinkURL', $field_2_image_externalLinkURL, array('style' => 'width: 100%;')); ?></td>
		</tr>
	</table>
</div>

<div class="ccm-block-field-group">
	<h2>Right Bottom Image</h2>
	<?php  echo $al->image('field_3_image_fID', 'field_3_image_fID', 'Choose Image', $field_3_image); ?>

	<table border="0" cellspacing="3" cellpadding="0" style="width: 95%; margin-top: 5px;">
		<tr>
			<td align="right" nowrap="nowrap"><label for="field_3_image_externalLinkURL">Link to URL:</label>&nbsp;</td>
			<td align="left" style="width: 100%;"><?php  echo $form->text('field_3_image_externalLinkURL', $field_3_image_externalLinkURL, array('style' => 'width: 100%;')); ?></td>
		</tr>
	</table>
</div>


