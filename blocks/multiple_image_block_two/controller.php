<?php  defined('C5_EXECUTE') or die("Access Denied.");

class MultipleImageBlockTwoBlockController extends BlockController {
	
	protected $btName = 'Multiple Horizontal Image Block';
	protected $btDescription = 'This block displays an optional Title and up to six images. The layout of the images can be changed by applying a template from the list. The intent is to display images horizontally i.e. 3images apply 3 column template. Adding more images than the available templates may result in images being stacked, one on top the other.';
	protected $btTable = 'btDCMultipleImageBlockTwo';
	
	protected $btInterfaceWidth = "700";
	protected $btInterfaceHeight = "450";
	
	protected $btCacheBlockRecord = true;
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btCacheBlockOutputForRegisteredUsers = false;
	protected $btCacheBlockOutputLifetime = CACHE_LIFETIME;
	
	public function getSearchableContent() {
		return $this->field_1_textbox_text;
	}

	public function view() {
		$this->set('field_2_image', (empty($this->field_2_image_fID) ? null : $this->get_image_object($this->field_2_image_fID, 0, 0, false)));
		$this->set('field_3_image', (empty($this->field_3_image_fID) ? null : $this->get_image_object($this->field_3_image_fID, 0, 0, false)));
		$this->set('field_4_image', (empty($this->field_4_image_fID) ? null : $this->get_image_object($this->field_4_image_fID, 0, 0, false)));
		$this->set('field_5_image', (empty($this->field_5_image_fID) ? null : $this->get_image_object($this->field_5_image_fID, 0, 0, false)));
		$this->set('field_6_image', (empty($this->field_6_image_fID) ? null : $this->get_image_object($this->field_6_image_fID, 0, 0, false)));
		$this->set('field_7_image', (empty($this->field_7_image_fID) ? null : $this->get_image_object($this->field_7_image_fID, 0, 0, false)));
		$this->set('field_8_image', (empty($this->field_8_image_fID) ? null : $this->get_image_object($this->field_8_image_fID, 0, 0, false)));
		$this->set('field_9_image', (empty($this->field_9_image_fID) ? null : $this->get_image_object($this->field_9_image_fID, 0, 0, false)));
		$this->set('field_10_image', (empty($this->field_10_image_fID) ? null : $this->get_image_object($this->field_10_image_fID, 0, 0, false)));
		$this->set('field_11_image', (empty($this->field_11_image_fID) ? null : $this->get_image_object($this->field_11_image_fID, 0, 0, false)));
		$this->set('field_12_image', (empty($this->field_12_image_fID) ? null : $this->get_image_object($this->field_12_image_fID, 0, 0, false)));
		$this->set('field_13_image', (empty($this->field_13_image_fID) ? null : $this->get_image_object($this->field_13_image_fID, 0, 0, false)));
		$this->set('field_14_image', (empty($this->field_14_image_fID) ? null : $this->get_image_object($this->field_14_image_fID, 0, 0, false)));
		$this->set('field_15_image', (empty($this->field_15_image_fID) ? null : $this->get_image_object($this->field_15_image_fID, 0, 0, false)));
		$this->set('field_16_image', (empty($this->field_16_image_fID) ? null : $this->get_image_object($this->field_16_image_fID, 0, 0, false)));
		$this->set('field_17_image', (empty($this->field_17_image_fID) ? null : $this->get_image_object($this->field_17_image_fID, 0, 0, false)));
		$this->set('field_18_image', (empty($this->field_18_image_fID) ? null : $this->get_image_object($this->field_18_image_fID, 0, 0, false)));
		$this->set('field_19_image', (empty($this->field_19_image_fID) ? null : $this->get_image_object($this->field_19_image_fID, 0, 0, false)));
		$this->set('field_20_image', (empty($this->field_20_image_fID) ? null : $this->get_image_object($this->field_20_image_fID, 0, 0, false)));
		$this->set('field_21_image', (empty($this->field_21_image_fID) ? null : $this->get_image_object($this->field_21_image_fID, 0, 0, false)));
	}


	public function edit() {
		$this->set('field_2_image', (empty($this->field_2_image_fID) ? null : File::getByID($this->field_2_image_fID)));
		$this->set('field_3_image', (empty($this->field_3_image_fID) ? null : File::getByID($this->field_3_image_fID)));
		$this->set('field_4_image', (empty($this->field_4_image_fID) ? null : File::getByID($this->field_4_image_fID)));
		$this->set('field_5_image', (empty($this->field_5_image_fID) ? null : File::getByID($this->field_5_image_fID)));
		$this->set('field_6_image', (empty($this->field_6_image_fID) ? null : File::getByID($this->field_6_image_fID)));
		$this->set('field_7_image', (empty($this->field_7_image_fID) ? null : File::getByID($this->field_7_image_fID)));
		$this->set('field_8_image', (empty($this->field_8_image_fID) ? null : File::getByID($this->field_8_image_fID)));
		$this->set('field_9_image', (empty($this->field_9_image_fID) ? null : File::getByID($this->field_9_image_fID)));
		$this->set('field_10_image', (empty($this->field_10_image_fID) ? null : File::getByID($this->field_10_image_fID)));
		$this->set('field_11_image', (empty($this->field_11_image_fID) ? null : File::getByID($this->field_11_image_fID)));
		$this->set('field_12_image', (empty($this->field_12_image_fID) ? null : File::getByID($this->field_12_image_fID)));
		$this->set('field_13_image', (empty($this->field_13_image_fID) ? null : File::getByID($this->field_13_image_fID)));
		$this->set('field_14_image', (empty($this->field_14_image_fID) ? null : File::getByID($this->field_14_image_fID)));
		$this->set('field_15_image', (empty($this->field_15_image_fID) ? null : File::getByID($this->field_15_image_fID)));
		$this->set('field_16_image', (empty($this->field_16_image_fID) ? null : File::getByID($this->field_16_image_fID)));
		$this->set('field_17_image', (empty($this->field_17_image_fID) ? null : File::getByID($this->field_17_image_fID)));
		$this->set('field_18_image', (empty($this->field_18_image_fID) ? null : File::getByID($this->field_18_image_fID)));
		$this->set('field_19_image', (empty($this->field_19_image_fID) ? null : File::getByID($this->field_19_image_fID)));
		$this->set('field_20_image', (empty($this->field_20_image_fID) ? null : File::getByID($this->field_20_image_fID)));
		$this->set('field_21_image', (empty($this->field_21_image_fID) ? null : File::getByID($this->field_21_image_fID)));
	}

	public function save($args) {
		$args['field_2_image_fID'] = empty($args['field_2_image_fID']) ? 0 : $args['field_2_image_fID'];
		$args['field_3_image_fID'] = empty($args['field_3_image_fID']) ? 0 : $args['field_3_image_fID'];
		$args['field_4_image_fID'] = empty($args['field_4_image_fID']) ? 0 : $args['field_4_image_fID'];
		$args['field_5_image_fID'] = empty($args['field_5_image_fID']) ? 0 : $args['field_5_image_fID'];
		$args['field_6_image_fID'] = empty($args['field_6_image_fID']) ? 0 : $args['field_6_image_fID'];
		$args['field_7_image_fID'] = empty($args['field_7_image_fID']) ? 0 : $args['field_7_image_fID'];
		$args['field_8_image_fID'] = empty($args['field_8_image_fID']) ? 0 : $args['field_8_image_fID'];
		$args['field_9_image_fID'] = empty($args['field_9_image_fID']) ? 0 : $args['field_9_image_fID'];
		$args['field_10_image_fID'] = empty($args['field_10_image_fID']) ? 0 : $args['field_10_image_fID'];
		$args['field_11_image_fID'] = empty($args['field_11_image_fID']) ? 0 : $args['field_11_image_fID'];
		$args['field_12_image_fID'] = empty($args['field_12_image_fID']) ? 0 : $args['field_12_image_fID'];
		$args['field_13_image_fID'] = empty($args['field_13_image_fID']) ? 0 : $args['field_13_image_fID'];
		$args['field_14_image_fID'] = empty($args['field_14_image_fID']) ? 0 : $args['field_14_image_fID'];
		$args['field_15_image_fID'] = empty($args['field_15_image_fID']) ? 0 : $args['field_15_image_fID'];
		$args['field_16_image_fID'] = empty($args['field_16_image_fID']) ? 0 : $args['field_16_image_fID'];
		$args['field_17_image_fID'] = empty($args['field_17_image_fID']) ? 0 : $args['field_17_image_fID'];
		$args['field_18_image_fID'] = empty($args['field_18_image_fID']) ? 0 : $args['field_18_image_fID'];
		$args['field_19_image_fID'] = empty($args['field_19_image_fID']) ? 0 : $args['field_19_image_fID'];
		$args['field_20_image_fID'] = empty($args['field_20_image_fID']) ? 0 : $args['field_20_image_fID'];
		$args['field_21_image_fID'] = empty($args['field_21_image_fID']) ? 0 : $args['field_21_image_fID'];
		parent::save($args);
	}

	//Helper function for image fields
	private function get_image_object($fID, $width = 0, $height = 0, $crop = false) {
		if (empty($fID)) {
			$image = null;
		} else if (empty($width) && empty($height)) {
			//Show image at full size (do not generate a thumbnail)
			$file = File::getByID($fID);
			$image = new stdClass;
			$image->src = $file->getRelativePath();
			$image->width = $file->getAttribute('width');
			$image->height = $file->getAttribute('height');
		} else {
			//Generate a thumbnail
			$width = empty($width) ? 9999 : $width;
			$height = empty($height) ? 9999 : $height;
			$file = File::getByID($fID);
			$ih = Loader::helper('image');
			$image = $ih->getThumbnail($file, $width, $height, $crop);
		}
	
		return $image;
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
