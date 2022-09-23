<?php
require_once __DIR__ . '/Properties.php';

class SoldProperties extends Properties{
    public $rent;
    
    public function __construct($size, $isolation, $design, $rent){

        $this->rent = $rent;

        parent::__construct($size, $isolation, $design);
    }

}