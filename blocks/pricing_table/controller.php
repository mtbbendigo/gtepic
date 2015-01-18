<?php  defined('C5_EXECUTE') or die("Access Denied.");

class PricingTableBlockController extends BlockController {
	
	protected $btName = 'Pricing Table';
	protected $btDescription = 'Use this block to display a pricing table. The Heading and three rows are mandatory. The last row always contains a button with a hyperlink. Any other rows are not mandatory and will not be displayed where no value exists';
	protected $btTable = 'btDCPricingTable';
	
	protected $btInterfaceWidth = "700";
	protected $btInterfaceHeight = "450";
	
	protected $btCacheBlockRecord = true;
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btCacheBlockOutputForRegisteredUsers = false;
	protected $btCacheBlockOutputLifetime = CACHE_LIFETIME;
	
	public function getSearchableContent() {
		$content = array();
		$content[] = $this->field_1_textbox_text;
		$content[] = $this->field_2_textbox_text;
		$content[] = $this->field_3_textbox_text;
		$content[] = $this->field_4_textbox_text;
		$content[] = $this->field_5_textbox_text;
		$content[] = $this->field_6_textbox_text;
		$content[] = $this->field_7_textbox_text;
		$content[] = $this->field_8_textbox_text;
		$content[] = $this->field_9_textbox_text;
		$content[] = $this->field_10_textbox_text;
		$content[] = $this->field_11_textbox_text;
		$content[] = $this->field_12_textbox_text;
		return implode(' - ', $content);
	}






	//Helper function for external URLs
	public function valid_url($url) {
		if ((strpos($url, 'http') === 0) || (strpos($url, 'mailto') === 0)) {
			return $url;
		} else if (strpos($url, '@') !== false) {
			return 'mailto:' . $url;
		} else if (strpos($url, '/') === 0) {
			return View::url($url); //site path (not an external url)
		} else {
			return 'http://' . $url;
		}
	}
	

}
