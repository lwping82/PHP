	<div class="container-fluid text-center text-md-start">
		<div class="row">
			<?php 
			foreach($cardGallery->get_cards() as $card) {
    			echo "<div class=\"col-xxl-".$cardGallery->get_colXXL()." col-xl-".$cardGallery->get_colXL()." col-lg-".$cardGallery->get_colLG()." col-md-".$cardGallery->get_colMD()." col-sm-".$cardGallery->get_colSM()." col-xs-".$cardGallery->get_colXS()." mx-auto mb-10 md-0 mb-4\">";
    			echo "	<div class=\"card\" style=\"width: 100%;height:100%;\">";
    			echo "		<img src=\"".$card->get_url()."\" class=\"card-img-top\">";
    			echo "		<div class=\"card-body\">";
    			echo "			<h5 class=\"card-title\" style=\"min-height:50px;\">".$card->get_header()."</h5>";
    			echo "			<p class=\"card-text\">".$card->get_desc()."<br/><br/><br/></p>";

    			foreach($card->get_buttons() as $button) {
        			
            			echo "			    <button class=\"btn ".$button->get_buttonColorClassName()." btn-lg btn-block\">";
            			echo "				   <svg xmlns=\"http://www.w3.org/2000/svg\"";
            			echo "					  width=\"".$button->get_svgIconWidth()."\" height=\"".$button->get_svgIconHeight()."\" fill=\"currentColor\" class=\"bi ".$button->get_svgIconClassName()." ".$button->get_svgIconColorClassName()."\"";
            			echo "					  viewBox=\"0 0 16 16\">";
        			
            			foreach($button->get_svgPaths() as $path) {
            			
            			    echo "                    <path d=\"".$path->get_content()."\" />";
            			
            			}
        			
                        echo "                  </svg>";
                        echo "				   ".$button->get_label();
            			echo "			    </button>";
        			
        			}
    			
    			echo "		</div>";
    			echo "	</div>";
    			echo "</div>";
			}
			?>

		</div>
	</div>