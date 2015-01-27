ccmValidateBlockForm = function() {
	
	if ($('#field_1_textbox_text').val() == '') {
		ccm_addError('Missing required text: Heading');
	}

	if ($('#field_2_textbox_text').val() == '') {
		ccm_addError('Missing required text: Row One');
	}

	if ($('#field_3_textbox_text').val() == '') {
		ccm_addError('Missing required text: Row Two');
	}

	if ($('#field_12_textbox_text').val() == '') {
		ccm_addError('Missing required text: Button');
	}

	if ($('input[name=field_13_link_url]').val() == '') {
		ccm_addError('Missing required URL: Button Url');
	}


	return false;
}
