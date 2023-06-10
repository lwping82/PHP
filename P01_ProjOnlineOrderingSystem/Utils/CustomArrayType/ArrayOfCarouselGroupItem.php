<?php
namespace Utils\CustomArrayType;

require_once dirname(__FILE__,3)."/Domain/CarouselGroupItem.php";

use Domain as domain;

class ArrayOfCarouselGroupItem extends \ArrayObject {
    public function offsetSet($index, $newval) {
        if($newval instanceof domain\CarouselGroupItem) {
            return parent::offsetSet($index, $newval);
        }
        throw new \InvalidArgumentException('Value must be type of CarouselGroupItem');
    }
}
?>