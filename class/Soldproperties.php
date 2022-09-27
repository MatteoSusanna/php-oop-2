<?php
require_once __DIR__ . '/Properties.php';

class Soldproperties extends Properties{
    public $sellingPrice;
    
    public function __construct($size, $isolation, $design, $sellingPrice, $url){

        $this->sellingPrice = $sellingPrice;

        parent::__construct($size, $isolation, $design, $url);
    }

    public function getSold(){
        return '<h2>Casa Venduta</h2>' . 
        "<img src='$this->url'>" . '<br>'. 
        'Design: ' . $this->design . '<br>'. 
        'Grandezza: '. $this->size . '<br>' . 
        'Prezzo di vendita: ' . $this->sellingPrice;
    }
}
