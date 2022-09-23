<?php

require_once __DIR__ . '/trait/address.php';
class Properties{
    public $size;
    public $isolation;
    public $design;

    use Address;

    public function __construct($size, $isolation, $design)
    {
        $this->size = $size;
        $this->isolation = $isolation;
        $this->design = $design;
    }

}