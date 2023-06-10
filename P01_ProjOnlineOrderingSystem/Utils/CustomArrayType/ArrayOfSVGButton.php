<?php
namespace Utils\CustomArrayType;

require_once dirname(__FILE__,3)."/Domain/SVGButton.php";

use Domain as domain;

class ArrayOfSVGButton extends \ArrayObject {
    public function offsetSet($index, $newval) {
        if($newval instanceof domain\SVGButton) {
            return parent::offsetSet($index, $newval);
        }
        throw new \InvalidArgumentException('Value must be type of SVGButton');
    }
}
?>