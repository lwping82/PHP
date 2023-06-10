		<div class="container-fluid">

            <div id="carouselHighlights" class="carousel carousel-dark slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <?php 
                $count = 0;
                foreach($carouselItems as $carouselItem) {
                    $slideCount = $count+1;
                    if($carouselItem->get_isActive()===true) {
                        echo "<button type=\"button\" data-bs-target=\"#carouselHighlights\" data-bs-slide-to=\"$count\" class=\"active\" aria-current=\"true\" aria-label=\"Slide $slideCount\"></button>";
                    } else {
                        echo "<button type=\"button\" data-bs-target=\"#carouselHighlights\" data-bs-slide-to=\"$count\" aria-label=\"Slide $slideCount\"></button>";
                    }
                    $count++;
                }
                ?>
              </div>
              <div class="carousel-inner">
              	<?php
              	foreach($carouselItems as $carouselItem) {
              	    echo "<div class=\"carousel-item".($carouselItem->get_isActive()===true?" active":"")."\" data-bs-interval=\"".$carouselItem->get_slideInterval()."\">";
                    echo "  <img src=\"".$carouselItem->get_url()."\" class=\"d-block w-100\">";
                    echo "  <div class=\"carousel-caption d-none d-md-block\" style=\"background-color: white;opacity: 0.5;\">";
                    echo "    <h5>".$carouselItem->get_header()."</h5>";
                    echo "    <p>".$carouselItem->get_subHeader()."</p>";
                    echo "  </div>";
                    echo "</div>";              	
              	}
              	?>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselHighlights" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselHighlights" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            
		</div>