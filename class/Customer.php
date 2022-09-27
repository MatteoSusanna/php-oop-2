<?php
require_once __DIR__ . '/User.php';

class Customer extends User{
    public $note;

    public function __construct($name, $email, $address, $note = null )
    {
        $this->note = $note;
        
        parent::__construct($name, $email, $address);
    }
    
    public function getCostumer(){
        return '<h2>Costumer</h2>' . 
        'Nome: ' . $this->name . '<br>' . 
        'Email: ' . $this->email . '<br>' . 
        'Telefono: ' . $this->phone . '<br>' ;
    }

}