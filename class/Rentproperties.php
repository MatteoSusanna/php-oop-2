<?php
require_once __DIR__ . '/Properties.php';

class Rentproperties extends Properties{
    public $rent;
    
    public function __construct($size, $isolation, $design, $rent, $url){

        $this->rent = $rent;

        parent::__construct($size, $isolation, $design, $url);
    }

    public function getSold(){
        return '<h2>Casa In Affitto</h2>' . 
        "<img src='$this->url'>" . '<br>'. 
        'Design:' . $this->design . '<br>'. 
        'Grandezza :'. $this->size . '<br>' . 
        'Prezzo di vendita: ' . $this->rent;
    }

}