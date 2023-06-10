<?php declare(strict_types=1);
namespace Domain;

class SVGPath {
    private String $content;
    
    function __construct(String $content) {
            $this->content = $content;
    }
    
    function get_content() {
        return $this->content;
    }
}
?>