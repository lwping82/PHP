<?php 
require_once dirname(__FILE__,1).'/Domain/Carousel.php';
require_once dirname(__FILE__,1).'/Domain/CardGallery.php';
require_once dirname(__FILE__,1).'/Domain/ResultSetContainer.php';
require_once dirname(__FILE__,1).'/Domain/ChefRecommendation.php';
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

	<?php
	$connector = new dbConnector\DBUtils("localhost", "3306", "[USERNAME]", "[PASSWORD]", "onlinebooking");
	$connector->establishConnection();

	$sqlHelper = new SQLHelper();
	/*$user = $sqlHelper->executeQuery($connector->get_connection(), "select * from user where FirstName like :fn and LastName like :ln", array(':fn' => 'Jackson%', ':ln' => 'Wang%'));
	
	echo "count.".$user->get_totalRecord().">>>>";
	foreach($user->get_resultSet() as $result => $value) {
	    echo $value["ID"]." > ".$value["FirstName"]." > ".$value["LastName"]."<br/>";
	}*/
	
	$highlightResultSet = $sqlHelper->executeQuery($connector->get_connection(), "select a.ProductID, a.header, a.shortdesc, b.ImgPath, b.price, b.unit, a.activebydefault, a.interval from best_seller a, product b where a.withdrawn = 'N' and a.ProductID = b.id and a.category='HL'", []);
	
	$carouselItems = array();
	if($highlightResultSet->get_totalRecord() > 0) {
	    $arrayIndexCount = 0;
	    foreach($highlightResultSet->get_resultSet() as $result => $value) {
	        $carouselItems[$arrayIndexCount] = new domain\Carousel($value["header"], $value["shortdesc"], $value["ImgPath"], $value["activebydefault"]==='Y'?true:false, $value["interval"]);
	        $arrayIndexCount++;
	    }
	    
        /*$carouselItems = Array(
            new domain\Carousel('Best selling', 'Best selling of the month', 'images/carousel/carousel_01.jpg', true, 10000),
            new domain\Carousel('Awesome NEW product', 'Try out brand new while chocolate ball', 'images/carousel/carousel_02.jpg', false, 2000),
            new domain\Carousel('Love yourself', 'Buy yourself a sweet and lovely treat!', 'images/carousel/carousel_03.jpg', false, 2000)
        );*/
	}
	
	if($highlightResultSet->get_totalRecord() > 0) {
	    include 'carousel.php';
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

	<?php 
	$sectionTitle = "Best selling products";
	
	include 'sectionHeader.php';
    ?>


	<?php 
	$buttons = new customArrayType\ArrayOfSVGButton();
	
	$bestSellerResultSet = $sqlHelper->executeQuery($connector->get_connection(), "select a.ProductID, a.header, b.ImgPath, b.price, b.unit from best_seller a, product b where a.withdrawn = 'N' and a.ProductID = b.id and a.category='BS'", []);
	
	$svgPaths1 = new customArrayType\ArrayOfSVGPath();
	$svgPaths1[0] = new domain\SVGPath("M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z");
	
	$buttons[0] = new domain\SVGButton("Add to cart", "btn-warning", "bi-cart"
	    , "icon-black-color", "22", "22", $svgPaths1);

    $cards = new customArrayType\ArrayOfCard();
    
    if($bestSellerResultSet->get_totalRecord() > 0) {
        $arrayIndexCount = 0;
        foreach($bestSellerResultSet->get_resultSet() as $result => $value) {
            $cards[$arrayIndexCount] = new domain\Card($value["ImgPath"], $value["header"], $value["unit"].' (RM '.$value["price"].')', $buttons);
            $arrayIndexCount++;
        }

        /*$cards[0] = new domain\Card('images/bestseller/bestseller_01.jpg', 'Carrot Cake', '10 inch (RM 98)', $buttons);
        $cards[1] = new domain\Card('images/bestseller/bestseller_02.jpg', 'Berries Tart', '8 Inch (RM 78.90)', $buttons);
        $cards[2] = new domain\Card('images/bestseller/bestseller_03.jpg', 'Blue Berry Cheese Cake', '8 Inch (RM 120)', $buttons);
        $cards[3] = new domain\Card('images/bestseller/bestseller_04.jpg', 'Chocolate Brownie', '10 Inch (RM 150)', $buttons);
        $cards[4] = new domain\Card('images/bestseller/bestseller_05.jpg', 'Strawberry Roll', 'One Roll (RM 17.90)', $buttons);
        $cards[5] = new domain\Card('images/bestseller/bestseller_06.jpg', 'Chicken Ham Sandwich', 'One piece (RM 8.89)', $buttons);
        $cards[6] = new domain\Card('images/bestseller/bestseller_07.jpg', 'Burnt Cheese Cake', '8 Inch (RM 145.60)', $buttons);
        $cards[7] = new domain\Card('images/bestseller/bestseller_08.jpg', 'Chocolate Strawberry Cake', '10 Inch (RM 199)', $buttons);*/
        
    
    }

    
    /*$svgPaths2 = new customArrayType\ArrayOfSVGPath();
    $svgPaths2[0] = new domain\SVGPath("M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z");
    $svgPaths2[1] = new domain\SVGPath("m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z");
    
    $buttons[1] = new domain\SVGButton("More Info", "btn-info", "bi-chat-dots"
        , "icon-black-color", "22", "22", $svgPaths2);*/
        
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


	<?php 
	$sectionTitle = "Chef Recomendations";
	
	include 'sectionHeader.php';

    ?>

	

	<?php 		
		$carouselGroupItems = new customArrayType\ArrayOfCarouselGroupItem();
		
		$buttons = new customArrayType\ArrayOfSVGButton();
		
		$svgPaths1 = new customArrayType\ArrayOfSVGPath();
		$svgPaths1[0] = new domain\SVGPath("M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z");
		
		$buttons[0] = new domain\SVGButton("Add to cart", "btn-warning", "bi-cart"
		    , "icon-black-color", "22", "22", $svgPaths1);

		$chefRecommentationResultSet = $sqlHelper->executeQuery($connector->get_connection(), "select a.ProductID, a.header, b.ImgPath, b.price, b.unit from best_seller a, product b where a.withdrawn = 'N' and a.ProductID = b.id and a.category='CR'", []);
		
		$gallerySize = 3;
		$carouselGroupItems = new customArrayType\ArrayOfCarouselGroupItem();
		$parentArrayIndexCount = 0;
		$firstSlide = true;
		if($chefRecommentationResultSet->get_totalRecord() > 0) {
		    $cards1 = new customArrayType\ArrayOfCard();
		    $arrayIndexCount = 0;
		    foreach($chefRecommentationResultSet->get_resultSet() as $result => $value) {
		        $cards1[$arrayIndexCount] = new domain\Card($value["ImgPath"], $value["header"], $value["unit"].' (RM '.$value["price"].')', $buttons);
		        
		        $nextArrayIndex = $arrayIndexCount+1;
		        
		        if(fmod($nextArrayIndex, $gallerySize)==0) {
		            $carouselGroupItems[$parentArrayIndexCount] = new domain\CarouselGroupItem($firstSlide, "10000", "4", "4",
		                "4", "4", "12", "12",
		                $cards1);
		            $parentArrayIndexCount++;
		            $firstSlide = false;
		            $arrayIndexCount = 0;
		            $cards1 = new customArrayType\ArrayOfCard();
		        } else {
                    $arrayIndexCount++;
		        }
		    }
		}

		/*$cards1 = new customArrayType\ArrayOfCard();
		$cards1[0] = new domain\Card('images/chef/chef_01.jpg', 'Croissants Strawberry', 'Per piece (RM 18.90)', $buttons);
		$cards1[1] = new domain\Card('images/chef/chef_02.jpg', 'Mix Berries Muffin Cupcake', 'Per piece (RM 5.80)', $buttons);
		$cards1[2] = new domain\Card('images/chef/chef_03.jpg', 'Macaroons', 'Per piece (RM 9.90)', $buttons);
		

		$carouselGroupItems[0] = new domain\CarouselGroupItem(true, "10000", "4", "4",
		    "4", "4", "12", "12",
		    $cards1);
		
		$cards2 = new customArrayType\ArrayOfCard();
		$cards2[0] = new domain\Card('images/chef/chef_04.jpg', 'Marble Cheecake', '8 Inch (RM 145.50)', $buttons);
		$cards2[1] = new domain\Card('images/chef/chef_05.jpg', 'Strawberries Jelly Cake', '10 Inch (RM89.79)', $buttons);
		$cards2[2] = new domain\Card('images/chef/chef_06.jpg', 'Black Forest Chocolate Roll', 'Per roll (RM 25.60)', $buttons);
		$carouselGroupItems[1] = new domain\CarouselGroupItem(false, "10000", "4", "4",
		    "4", "4", "12", "12",
		    $cards2);*/
		
		if($bestSellerResultSet->get_totalRecord() > 0) {
		    $chefRecommentation = new domain\ChefRecommendation("carouselChefRecommendation", $carouselGroupItems);
		    
		    include 'chefRecommendationGallery.php';
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