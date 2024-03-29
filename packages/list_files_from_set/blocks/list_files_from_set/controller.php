<?php   
	defined('C5_EXECUTE') or die("Access Denied.");
	 
	class ListFilesFromSetBlockController extends BlockController {

		protected $btInterfaceWidth = 380;
		protected $btInterfaceHeight = 350;
		protected $btTable = 'btListFilesFromSet';

		/** 
		 * Used for localization. If we want to localize the name/description we have to include this
		 */
		public function getBlockTypeDescription() {
			return t("Displays a list of files from a file set.");
		}
		
		public function getBlockTypeName() {
			return t("List Files From Set");
		}

		public function getJavaScriptStrings() {
			return array('fileset-required' => t('You must select a file set.'));	
		}
		
		public function validate($args) {
			$e = Loader::helper('validation/error');
			if ($args['fsID'] < 1) {
				$e->add(t('You must select a file set.'));
			}
			 
			return $e;
		}
		
		function save($args) {
			 			
			$args['numberFiles'] = ($args['numberFiles'] > 0) ? $args['numberFiles'] : 0;
			$args['displaySetTitle'] = ($args['displaySetTitle']) ? '1' : '0';
			$args['replaceUnderscores'] = ($args['replaceUnderscores']) ? '1' : '0'; 
			$args['displaySize'] = ($args['displaySize']) ? '1' : '0';
			$args['displayDateAdded'] = ($args['displayDateAdded']) ? '1' : '0';
			$args['uppercaseFirst'] = ($args['uppercaseFirst']) ? '1' : '0';
			 
			parent::save($args);
		}
		
		
		
		public function getFileSetID() {
			return $this->fsID;
		}
		
		public function getFileSetName() {
			if ($this->fileSetName)
				return $this->fileSetName;
			else {
				Loader::model('file_set');
				$fs = FileSet::getById($this->fsID);
				return $fs->getFileSetName(); 
			}
			
		}
		
		public function getFileSet() {
			 
   			Loader::model('file_set');
    		Loader::model('file_list');
    		$fs = FileSet::getById($this->fsID);
    		
    		$files = array();
    		
    		// if the file set exists (may have been deleted) 
    		if ($fs->fsID) {
		
				$this->fileSetName = $fs->getFileSetName(); 
			
				$fl = new FileList();
				$fl->filterBySet($fs);
			 	 
				if ($this->fileOrder == 'date_asc')
					$fl->sortBy('fDateAdded', 'asc');
				elseif($this->fileOrder == 'date_desc')
					$fl->sortBy('fDateAdded', 'desc');
				elseif($this->fileOrder == 'alpha_asc')
					$fl->sortBy('fvTitle', 'asc');
				elseif($this->fileOrder == 'alpha_desc')
					$fl->sortBy('fvTitle', 'desc');
				elseif($this->fileOrder == 'set_order' or $this->fileOrder == 'set_order_rev')
					$fl->sortByFileSetDisplayOrder();
	 			 
	 				
				$files = $fl->get((int)$this->numberFiles, 0);
	
				if ($this->fileOrder == 'set_order_rev')
					$files = array_reverse($files);
						 
			}  		 
						 
			return $files;
		}
		
		
		public function getSearchableContent() {
		         $files = $this->getFileSet();
		         $search = '';
		         foreach($files as $f) {
		            $fp = new Permissions($f);
		            if ($fp->canViewFile()) {  
		               $fv = $f->getApprovedVersion();
		               $filename = $fv->getFileName();
		               $title = $f->getTitle();
		               $description = $f->getDescription();
		               $tags =  $f->getTags();
		               $search .= $title.' '.$filename. ' '   .$description .' ' . $tags . '<br/>';
		            }
		         }
		         return $this->getFileSetName() . ' ' . $search;
		 }
		
		
	}
?>
