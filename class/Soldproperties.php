<?php
require_once __DIR__ . '/Properties.php';

class Soldproperties extends Properties{
    public $sellingPrice;
    
    public function __construct($size, $isolation, $design, $sellingPrice, $url){

        $this->sellingPrice = $sellingPrice;

        parent::__construct($size, $isolation, $design, $url);
    }
}