<?php
require __DIR__ . '/Properties.php';

class SoldProperties extends Properties{
    public $sellingPrice;
    
    public function __construct($size, $isolation, $design, $sellingPrice){

        $this->sellingPrice = $sellingPrice;

        parent::__construct($size, $isolation, $design);
    }


}