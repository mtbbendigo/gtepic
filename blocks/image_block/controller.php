<?php  defined('C5_EXECUTE') or die("Access Denied.");

class ImageBlockBlockController extends BlockController {
	
	protected $btName = 'Image Block';
	protected $btDescription = 'This block is suited for Advertising. It accepts up to six images with links to external sites.';
	protected $btTable = 'btDCImageBlock';
	
	protected $btInterfaceWidth = "700";
	protected $btInterfaceHeight = "450";
	
	protected $btCacheBlockRecord = true;
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btCacheBlockOutputForRegisteredUsers = false;
	protected $btCacheBlockOutputLifetime = CACHE_LIFETIME;
	

	public function view() {
		$this->set('field_1_image', (empty($this->field_1_image_fID) ? null : $this->get_image_object($this->field_1_image_fID, 0, 0, false)));
		$this->set('field_2_image', (empty($this->field_2_image_fID) ? null : $this->get_image_object($this->field_2_image_fID, 0, 0, false)));
		$this->set('field_3_image', (empty($this->field_3_image_fID) ? null : $this->get_image_object($this->field_3_image_fID, 0, 0, false)));
		$this->set('field_4_image', (empty($this->field_4_image_fID) ? null : $this->get_image_object($this->field_4_image_fID, 0, 0, false)));
		$this->set('field_5_image', (empty($this->field_5_image_fID) ? null : $this->get_image_object($this->field_5_image_fID, 0, 0, false)));
		$this->set('field_6_image', (empty($this->field_6_image_fID) ? null : $this->get_image_object($this->field_6_image_fID, 0, 0, false)));
	}


	public function edit() {
		$this->set('field_1_image', (empty($this->field_1_image_fID) ? null : File::getByID($this->field_1_image_fID)));
		$this->set('field_2_image', (empty($this->field_2_image_fID) ? null : File::getByID($this->field_2_image_fID)));
		$this->set('field_3_image', (empty($this->field_3_image_fID) ? null : File::getByID($this->field_3_image_fID)));
		$this->set('field_4_image', (empty($this->field_4_image_fID) ? null : File::getByID($this->field_4_image_fID)));
		$this->set('field_5_image', (empty($this->field_5_image_fID) ? null : File::getByID($this->field_5_image_fID)));
		$this->set('field_6_image', (empty($this->field_6_image_fID) ? null : File::getByID($this->field_6_image_fID)));
	}

	public function save($args) {
		$args['field_1_image_fID'] = empty($args['field_1_image_fID']) ? 0 : $args['field_1_image_fID'];
		$args['field_2_image_fID'] = empty($args['field_2_image_fID']) ? 0 : $args['field_2_image_fID'];
		$args['field_3_image_fID'] = empty($args['field_3_image_fID']) ? 0 : $args['field_3_image_fID'];
		$args['field_4_image_fID'] = empty($args['field_4_image_fID']) ? 0 : $args['field_4_image_fID'];
		$args['field_5_image_fID'] = empty($args['field_5_image_fID']) ? 0 : $args['field_5_image_fID'];
		$args['field_6_image_fID'] = empty($args['field_6_image_fID']) ? 0 : $args['field_6_image_fID'];
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
