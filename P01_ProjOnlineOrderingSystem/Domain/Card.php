<?php declare(strict_types=1);
namespace Domain;

require_once dirname(__FILE__,2)."/Utils/CustomArrayType/ArrayOfSVGButton.php";

use Utils\CustomArrayType as customArrayType;

class Card {
    private String $url;
    private String $header;
    private String $desc;
    
    private customArrayType\ArrayOfSVGButton $buttons;
    
    function __construct(String $url, String $header, String $desc, customArrayType\ArrayOfSVGButton $buttons) {
        $this->url = $url;
        $this->header = $header;
        $this->desc = $desc;
        $this->buttons = $buttons;
    }

    function get_url() {
        return $this->url;
    }
    
    function get_header() {
        return $this->header;
    }
    
    function get_desc() {
        return $this->desc;
    }
    
    function get_buttons() {
        return $this->buttons;
    }
}
?>