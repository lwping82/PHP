<?php 
require_once dirname(__FILE__,1).'/Domain/Carousel.php';
require_once dirname(__FILE__,1).'/Domain/CardGallery.php';
require_once dirname(__FILE__,1).'/Domain/ResultSetContainer.php';
require_once dirname(__FILE__,1).'/Utils/DB/DBUtils.php';
require_once dirname(__FILE__,1).'/Utils/DB/SQLHelper.php';

use Domain as domain;
use Utils\CustomArrayType as customArrayType; 
use Utils\DB as dbConnector;
use Utils\DB\SQLHelper;
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'commonHeader.php';?>
</head>
<body class="app-page-background">
	<?php include 'header.php';?>

	<?php include 'navbar.php';?>

	<div style="min-height:100%;">
	</div>

	<?php 
	$connector = new dbConnector\DBUtils("localhost", "3306", "[USERNAME]", "[PASSWORD]", "onlinebooking");
	$connector->establishConnection();
	
	$sqlHelper = new SQLHelper();
	
	$buttons = new customArrayType\ArrayOfSVGButton();
	
	$bestSellerResultSet = $sqlHelper->executeQuery($connector->get_connection(), "select a.ProductID, a.header, b.ImgGalleryPath, b.price, b.unit from best_seller a, product b where a.withdrawn = 'N' and a.ProductID = b.id and a.category='".$_POST['opt']."'", []);
	
	$svgPaths1 = new customArrayType\ArrayOfSVGPath();
	$svgPaths1[0] = new domain\SVGPath("M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z");
	
	$buttons[0] = new domain\SVGButton("Add to cart", "btn-warning", "bi-cart"
	    , "icon-black-color", "22", "22", $svgPaths1);

    $cards = new customArrayType\ArrayOfCard();
    
    if($bestSellerResultSet->get_totalRecord() > 0) {
        $arrayIndexCount = 0;
        foreach($bestSellerResultSet->get_resultSet() as $result => $value) {
            $cards[$arrayIndexCount] = new domain\Card($value["ImgGalleryPath"], $value["header"], $value["unit"].' (RM '.$value["price"].')', $buttons);
            $arrayIndexCount++;
        }
    }

    if($bestSellerResultSet->get_totalRecord() > 0) {
        $cardGallery = new domain\CardGallery('3', '3', '4', '6', '12', '12', $cards);
    
        include 'SVGGallery.php';
    } else {
    ?>
    <div class="container text-center">
    	<div class="row text-center">
        	<center><i>Content update is in progress...Please wait for more new and delicious products coming up soon.</i></center>
        </div>
    </div>
    <?php
    }
	?>

	<br/>

	<?php include 'footer.php';?>
	
</body>
</html>