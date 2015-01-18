<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<div class="row">
	<div class="large-9 push-3 columns">
      	<div class="box-container">
      		<h4 class="box-title">Bendigo's Premier Mountain Bike event</h4>
	      	<article>
		 		<?php
		 			$a = new Area('Add News	');
		 			$a->display($c);
		 		?>
		 	</article>
      	</div>
		<br />
	</div>
    <!-- Side Nav -->
    <div class="large-3 pull-9 columns">
       	<?php
				$nav = BlockType::getByHandle('autonav');
				$nav->controller->orderBy = 'display_asc';
				$nav->controller->displayPages = 'top';
				$nav->controller->displaySubPages = 'none';
				$nav->render('templates/gazza_nav');
			?>
     <?php 
	     $a = new Area('Advert');
	     $a->display($c);
     ?>
    </div>
	<!-- End Side Nav -->    
</div> <!-- End Row -->
    
    
  
<?php  $this->inc('elements/footer.php'); ?>	