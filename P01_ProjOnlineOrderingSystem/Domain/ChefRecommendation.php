<?php declare(strict_types=1);
namespace Domain;

require_once dirname(__FILE__,2)."/Utils/CustomArrayType/ArrayOfCarouselGroupItem.php";

use Utils\CustomArrayType as customArrayType;

class ChefRecommendation {
    private String $id;
    private customArrayType\ArrayOfCarouselGroupItem $groupItems;
    
    function __construct(String $id, customArrayType\ArrayOfCarouselGroupItem $groupItems) {
        $this->id = $id;
        $this->groupItems = $groupItems;
    }
    
    function get_id() {
        return $this->id;
    }
    
    function get_groupItems() {
        return $this->groupItems;
    }
}
?>