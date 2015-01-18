<?php defined('C5_EXECUTE') or die("Access Denied.");

	$uh = Loader::helper('concrete/urls');
	$form = Loader::helper('form');
	/* @var $ih ConcreteInterfaceHelper */
	$ih = Loader::helper('concrete/interface');
?>

<div class="row">
	<div class="large-12 columns">
		<form>
			<fieldset>
				<legend>Pre-race Reog</legend>
				<div class="row">
					<div class=small-3 large-3 columns"><label>First Name:&nbsp;</label><input type="text" placeholder="large-4.columns"></div>
					<div class=small-3 large-3 columns"><label>Last Name:&nbsp;</label><input type="text" placeholder="large-4.columns"></div>
					<div class=small-3 large-3 columns"><label>MTBA License No:&nbsp;</label><input type="text" placeholder="large-4.columns"></div>
					<div class=small-3 large-3 columns"><label>Expiry Date:&nbsp;</label><input type="text" placeholder="large-4.columns"></div>
				</div>
			</fieldset>
		</form>
	</div>
</div>