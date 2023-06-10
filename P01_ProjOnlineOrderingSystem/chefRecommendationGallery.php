	<div class="container-fluid">
		<div id="<?php echo $chefRecommentation->get_id()?>" class="carousel carousel-dark slide"
			data-bs-ride="carousel">
			<div class="carousel-indicators">
				<?php 
				$count = 0;
				foreach($chefRecommentation->get_groupItems() as $groupItem) {
				    if($groupItem->get_isActive()===true) {
				?>
				<button type="button" data-bs-target="#<?php echo $chefRecommentation->get_id()?>"
					data-bs-slide-to="<?php echo $count;?>" class="active" aria-current="true"
					aria-label="Slide <?php echo $count+1;?>"></button>				
					<?php 
				    } else {
				    ?>
				<button type="button" data-bs-target="#<?php echo $chefRecommentation->get_id()?>"
					data-bs-slide-to="<?php echo $count;?>" 
					aria-label="Slide <?php echo $count+1;?>"></button>				    
				    <?php
				    }
				    $count++;
				}
				?>
			</div>
			<div class="carousel-inner">
				<?php 
				foreach($chefRecommentation->get_groupItems() as $groupItem) {
				?>
				<div class="carousel-item <?php echo $groupItem->get_isActive()===true?"active":"";?>" data-bs-interval="<?php echo $groupItem->get_showInterval();?>">
					<div class="card-group">
						<div class="row text-center text-md-start">
						<?php 
						foreach($groupItem->get_cards() as $card) {
						?>
						<div class="col-xxl-<?php echo $groupItem->get_colXXL();?> col-xl-<?php echo $groupItem->get_colXL();?> col-lg-<?php echo $groupItem->get_colLG();?> col-md-<?php echo $groupItem->get_colMD();?> col-sm-<?php echo $groupItem->get_colSM();?> col-xs-<?php echo $groupItem->get_colXS();?> mx-auto mb-md-0 mb-4">
							<div class="card" style="margin: 0 10px 10px 10px;height:100%;">
								<img src="<?php echo $card->get_url();?>" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title" style="min-height:50px;"><?php echo $card->get_header();?></h5>
									<p class="card-text"><?php echo $card->get_desc();?></p>
									<?php
									foreach($card->get_buttons() as $button) {
									?>
									<button type="button" class="btn <?php echo $button->get_buttonColorClassName();?> btn-lg btn-block">
        								<svg xmlns="http://www.w3.org/2000/svg" class="<?php echo $button->get_svgIconColorClassName();?> bi <?php echo $button->get_svgIconClassName();?>" width="<?php echo $button->get_svgIconWidth();?>" height="<?php echo $button->get_svgIconHeight();?>" fill="currentColor" viewBox="0 0 16 16">
                                           	<?php
                                           	foreach($button->get_svgPaths() as $path) {
                                           	?>
                                           	<path d="<?php echo $path->get_content();?>" />
                                           	<?php
                                           	}
                                           	?>
                                        </svg>
        								<?php echo $button->get_label();?>									
									</button>
									<?php
									}
									?>        							 									
								</div>
							</div>
						</div>
						<?php
						}
						?>
						</div>
					</div>
				</div>
				<?php    
				}
				?>
			</div>
			<button class="carousel-control-prev" type="button"
				data-bs-target="#<?php echo $chefRecommentation->get_id()?>" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button"
				data-bs-target="#<?php echo $chefRecommentation->get_id()?>" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>