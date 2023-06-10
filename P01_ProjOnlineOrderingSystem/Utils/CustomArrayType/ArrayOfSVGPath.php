<?php
namespace Utils\CustomArrayType;

require_once dirname(__FILE__,3)."/Domain/SVGPath.php";

use Domain as domain;

class ArrayOfSVGPath extends \ArrayObject {
    public function offsetSet($index, $newval) {
        if($newval instanceof domain\SVGPath) {
            return parent::offsetSet($index, $newval);
        }
        throw new \InvalidArgumentException('Value must be type of SVGPath');
    }
}
?>