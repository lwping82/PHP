<?php
namespace Utils\CustomArrayType;

require_once dirname(__FILE__,3)."/Domain/Card.php";

use Domain as domain;

class ArrayOfCard extends \ArrayObject {
    public function offsetSet($index, $newval) {
        if($newval instanceof domain\Card) {
            return parent::offsetSet($index, $newval);
        }
        throw new \InvalidArgumentException('Value must be type of Card');
    }
}
?>