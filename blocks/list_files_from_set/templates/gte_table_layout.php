<?php     defined('C5_EXECUTE') or die("Access Denied.");
	$date = Loader::helper('date');
	$c = Page::getCurrentPage();

	if($c instanceof Page) {
		$cID = $c->getCollectionID();
	}
	$files = $controller->getFileSet();
?>

<div class="document-text">
<?php   if ($displaySetTitle && $filesetname = $controller->getFileSetName()) { ?>
<div class="white-text"><?php   echo $filesetname; ?></div>
<?php   } ?>
	
<?php   if (!empty($files)) { ?>

<table class="gte-fileset-table" width="100%">
	<thead>
		<tr>
			<th class="fileset-table-heading" width="50%">File</th>
			<?php  
				//if($extension == 'brackets') {
				//	echo '<th width="50%">Unselect Type!</th>';
				//}
				//if ($displaySize) {
				// 		echo '<th>Unselect Size!</th>';
				//}
				if ($displayDateAdded) {
				 		echo '<th class="fileset-table-heading" width="50%">Date</th>';
				}
			?>
		</tr>
	</thead>
	
	<?php  	
	foreach($files as $f) {
		$fp = new Permissions($f);
		
		if ($fp->canViewFile()) {  
			$fv = $f->getApprovedVersion();
			// although the 'title' for a file is used for display,
			// the filename is retreived here so we can always get a file extension
			$filename = $fv->getFileName();
			$ext =  pathinfo($filename, PATHINFO_EXTENSION);

			
			$url = View::url('/download_file', $f->getFileID(),$cID);
			
			// if you wish to directly link to the file, bypassing permissons, logging, etc,
			// use instead of the above line:  $url = $fv->getURL();
			
			// if we are overriding the filename (e.g. showing only 1 file)
			if ($titleOverride) {
				$title = $titleOverride;
			} else {
			
				$title = $f->getTitle();
				
				// want to always use the filename and not the title?  uncomment line below
				// $title = $filename;
				
				// removes or puts in brackets the file extension
				if ($extension == 'hide') {
					if(strlen($title) - strlen($ext) == strrpos($title,$ext)) {
						$title = pathinfo($title, PATHINFO_FILENAME);
					}
				} elseif ($extension == 'brackets') {
										
					if(strlen($title) - strlen($ext) == strrpos($title,$ext)) {
						$title = pathinfo($title, PATHINFO_FILENAME);
					}
				}
				
				if ($replaceUnderscores) {
					 $title = str_replace('_', ' ', $title);
				}  
				
				if ($uppercaseFirst) {
					$title = ucfirst(strtolower($title));
				}
				 
			}
			?>
			<tr>
				<td>
					<a href="<?php   echo $url; ?>">
						<?php   echo $title; ?>
					</a>
				</td>
				<?php  
				if ($extension == 'brackets') {
					echo '<td>' . $ext . '</td>';
				}
				if ($displaySize) {
				 	echo '<td>' . $fv->getSize() . '</td>';
				}
				if ($displayDateAdded) {
				 	echo '<td>' . $date->getLocalDateTime($fv->getDateAdded(), DATE_APP_GENERIC_MDY) . '</td>';
				}
				?>
			</tr>
	<?php   } ?>
<?php   }	?>
</table>
<?php   }	?>

<?php   if (empty($files) && $noFilesMessage) { ?>
	<p><?php   echo $noFilesMessage; ?></p>
<?php   } ?>
</div>