<?php

require_once __DIR__ . '/trait/address.php';
class Properties{
    public $size;
    public $isolation;
    public $design;
    public $url;

    use Address;

    public function __construct($size, $isolation, $design, $url)
    {
        $this->size = $size;
        $this->isolation = $isolation;
        $this->design = $design;
        $this->url = $url;
    }

}