<?php
require_once __DIR__ . '/Properties.php';

class Rentproperties extends Properties{
    public $rent;
    
    public function __construct($size, $isolation, $design, $rent, $url){

        $this->rent = $rent;

        parent::__construct($size, $isolation, $design, $url);
    }

}