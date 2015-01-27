<?php  defined('C5_EXECUTE') or die("Access Denied.");
$al = Loader::helper('concrete/asset_library');
Loader::element('editor_config');
?>

<style type="text/css" media="screen">
	.ccm-block-field-group h2 { margin-bottom: 5px; }
	.ccm-block-field-group td { vertical-align: middle; }
</style>

<div class="ccm-block-field-group">
	<h2>Icon One</h2>
	<?php  echo $al->image('field_1_image_fID', 'field_1_image_fID', 'Choose Image', $field_1_image); ?>

	<table border="0" cellspacing="3" cellpadding="0" style="width: 95%; margin-top: 5px;">
		<tr>
			<td align="right" nowrap="nowrap"><label for="field_1_image_externalLinkURL">Link to URL:</label>&nbsp;</td>
			<td align="left" style="width: 100%;"><?php  echo $form->text('field_1_image_externalLinkURL', $field_1_image_externalLinkURL, array('style' => 'width: 100%;')); ?></td>
		</tr>
	</table>
</div>

<div class="ccm-block-field-group">
	<h2>Tool Tip One</h2>
	<?php  Loader::element('editor_controls'); ?>
	<textarea id="field_2_wysiwyg_content" name="field_2_wysiwyg_content" class="ccm-advanced-editor"><?php  echo $field_2_wysiwyg_content; ?></textarea>
</div>

<div class="ccm-block-field-group">
	<h2>Icon Two</h2>
	<?php  echo $al->image('field_3_image_fID', 'field_3_image_fID', 'Choose Image', $field_3_image); ?>

	<table border="0" cellspacing="3" cellpadding="0" style="width: 95%; margin-top: 5px;">
		<tr>
			<td align="right" nowrap="nowrap"><label for="field_3_image_externalLinkURL">Link to URL:</label>&nbsp;</td>
			<td align="left" style="width: 100%;"><?php  echo $form->text('field_3_image_externalLinkURL', $field_3_image_externalLinkURL, array('style' => 'width: 100%;')); ?></td>
		</tr>
	</table>
</div>

<div class="ccm-block-field-group">
	<h2>Tool Tip Two</h2>
	<?php  Loader::element('editor_controls'); ?>
	<textarea id="field_4_wysiwyg_content" name="field_4_wysiwyg_content" class="ccm-advanced-editor"><?php  echo $field_4_wysiwyg_content; ?></textarea>
</div>

<div class="ccm-block-field-group">
	<h2>Icon Three</h2>
	<?php  echo $al->image('field_5_image_fID', 'field_5_image_fID', 'Choose Image', $field_5_image); ?>

	<table border="0" cellspacing="3" cellpadding="0" style="width: 95%; margin-top: 5px;">
		<tr>
			<td align="right" nowrap="nowrap"><label for="field_5_image_externalLinkURL">Link to URL:</label>&nbsp;</td>
			<td align="left" style="width: 100%;"><?php  echo $form->text('field_5_image_externalLinkURL', $field_5_image_externalLinkURL, array('style' => 'width: 100%;')); ?></td>
		</tr>
	</table>
</div>

<div class="ccm-block-field-group">
	<h2>Tool Tip Three</h2>
	<?php  Loader::element('editor_controls'); ?>
	<textarea id="field_6_wysiwyg_content" name="field_6_wysiwyg_content" class="ccm-advanced-editor"><?php  echo $field_6_wysiwyg_content; ?></textarea>
</div>

<div class="ccm-block-field-group">
	<h2>Icon Four</h2>
	<?php  echo $al->image('field_7_image_fID', 'field_7_image_fID', 'Choose Image', $field_7_image); ?>

	<table border="0" cellspacing="3" cellpadding="0" style="width: 95%; margin-top: 5px;">
		<tr>
			<td align="right" nowrap="nowrap"><label for="field_7_image_externalLinkURL">Link to URL:</label>&nbsp;</td>
			<td align="left" style="width: 100%;"><?php  echo $form->text('field_7_image_externalLinkURL', $field_7_image_externalLinkURL, array('style' => 'width: 100%;')); ?></td>
		</tr>
	</table>
</div>

<div class="ccm-block-field-group">
	<h2>Tool Tip Four</h2>
	<?php  Loader::element('editor_controls'); ?>
	<textarea id="field_8_wysiwyg_content" name="field_8_wysiwyg_content" class="ccm-advanced-editor"><?php  echo $field_8_wysiwyg_content; ?></textarea>
</div>

<div class="ccm-block-field-group">
	<h2>Icon Five</h2>
	<?php  echo $al->image('field_9_image_fID', 'field_9_image_fID', 'Choose Image', $field_9_image); ?>

	<table border="0" cellspacing="3" cellpadding="0" style="width: 95%; margin-top: 5px;">
		<tr>
			<td align="right" nowrap="nowrap"><label for="field_9_image_externalLinkURL">Link to URL:</label>&nbsp;</td>
			<td align="left" style="width: 100%;"><?php  echo $form->text('field_9_image_externalLinkURL', $field_9_image_externalLinkURL, array('style' => 'width: 100%;')); ?></td>
		</tr>
	</table>
</div>

<div class="ccm-block-field-group">
	<h2>Tool Tip Five</h2>
	<?php  Loader::element('editor_controls'); ?>
	<textarea id="field_10_wysiwyg_content" name="field_10_wysiwyg_content" class="ccm-advanced-editor"><?php  echo $field_10_wysiwyg_content; ?></textarea>
</div>

<div class="ccm-block-field-group">
	<h2>Icon Six</h2>
	<?php  echo $al->image('field_11_image_fID', 'field_11_image_fID', 'Choose Image', $field_11_image); ?>

	<table border="0" cellspacing="3" cellpadding="0" style="width: 95%; margin-top: 5px;">
		<tr>
			<td align="right" nowrap="nowrap"><label for="field_11_image_externalLinkURL">Link to URL:</label>&nbsp;</td>
			<td align="left" style="width: 100%;"><?php  echo $form->text('field_11_image_externalLinkURL', $field_11_image_externalLinkURL, array('style' => 'width: 100%;')); ?></td>
		</tr>
	</table>
</div>

<div class="ccm-block-field-group">
	<h2>Tool Tip Six</h2>
	<?php  Loader::element('editor_controls'); ?>
	<textarea id="field_12_wysiwyg_content" name="field_12_wysiwyg_content" class="ccm-advanced-editor"><?php  echo $field_12_wysiwyg_content; ?></textarea>
</div>


