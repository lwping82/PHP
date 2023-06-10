<?php
namespace Domain;

class Carousel {
    private $header;
    private $subHeader;
    private $url;
    private $isActive;
    private $slideInterval;
    
    function __construct($header, $subHeader, $url, $isActive, $slideInterval) {
        $this->header = $header;
        $this->subHeader = $subHeader;
        $this->url = $url;
        $this->isActive = $isActive;
        $this->slideInterval = $slideInterval;
    }
    
    function get_header() {
        return $this->header;
    }
    
    function get_subHeader() {
        return $this->subHeader;
    }
    
    function get_url() {
        return $this->url;
    }
    
    function get_isActive() {
        return $this->isActive;
    }
    
    function get_slideInterval() {
        return $this->slideInterval;
    }
}
?>