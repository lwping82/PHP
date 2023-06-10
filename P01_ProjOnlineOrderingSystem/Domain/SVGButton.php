<?php declare(strict_types=1);
namespace Domain;

require_once dirname(__FILE__,2)."/Utils/CustomArrayType/ArrayOfSVGPath.php";

use Utils\CustomArrayType as customArrayType;

class SVGButton {
    private String $label;
    private String $buttonColorClassName;
    private String $svgIconClassName;
    private String $svgIconColorClassName;
    private String $svgIconWidth;
    private String $svgIconHeight;
    
    private customArrayType\ArrayOfSVGPath $svgPaths;
    
    function __construct(String $label, String $buttonColorClassName, String $svgIconClassName
        , String $svgIconColorClassName, String $svgIconWidth, String $svgIconHeight, customArrayType\ArrayOfSVGPath $svgPaths) {
        $this->label = $label;
        $this->buttonColorClassName = $buttonColorClassName;
        $this->svgIconClassName = $svgIconClassName;
        $this->svgIconColorClassName = $svgIconColorClassName;
        $this->svgIconWidth = $svgIconWidth;
        $this->svgIconHeight = $svgIconHeight;
        $this->svgPaths = $svgPaths;
    }

    function get_label() {
        return $this->label;
    }
    
    function get_buttonColorClassName() {
        return $this->buttonColorClassName;
    }
    
    function get_svgIconClassName() {
        return $this->svgIconClassName;
    }
    
    function get_svgIconColorClassName() {
        return $this->svgIconColorClassName;
    }
    
    function get_svgIconWidth() {
        return $this->svgIconWidth;
    }
    
    function get_svgIconHeight() {
        return $this->svgIconHeight;
    }
    
    function get_svgPaths() {
        return $this->svgPaths;
    }
}
?>
