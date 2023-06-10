<?php declare(strict_types=1);
namespace Domain;

require_once dirname(__FILE__,2)."/Utils/CustomArrayType/ArrayOfCard.php";

use Utils\CustomArrayType as customArrayType;

class CarouselGroupItem {
    private bool $isActive;
    private String $showInterval;
    private String $colXXL;
    private String $colXL;
    private String $colLG;
    private String $colMD;
    private String $colSM;
    private String $colXS;
    
    private customArrayType\ArrayOfCard $cards;
    
    function __construct(bool $isActive, String $showInterval, String $colXXL, String $colXL,
        String $colLG, String $colMD, String $colSM, String $colXS,
        customArrayType\ArrayOfCard $cards) {
        $this->isActive = $isActive;
        $this->showInterval = $showInterval;
        $this->colXXL = $colXXL;
        $this->colXL = $colXL;
        $this->colLG = $colLG;
        $this->colMD = $colMD;
        $this->colSM = $colSM;
        $this->colXS = $colXS;
        $this->cards = $cards;
    }
    
    function get_isActive() {
        return $this->isActive;
    }
    
    function get_showInterval() {
        return $this->showInterval;
    }
    
    function get_colXXL() {
        return $this->colXXL;
    }
    
    function get_colXL() {
        return $this->colXL;
    }
    
    function get_colLG() {
        return $this->colLG;
    }
    
    function get_colMD() {
        return $this->colMD;
    }
    
    function get_colSM() {
        return $this->colSM;
    }
    
    function get_colXS() {
        return $this->colXS;
    }
    
    function get_cards() {
        return $this->cards;
    }
}
?>