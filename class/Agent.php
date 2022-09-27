<?php
require_once __DIR__ . '/User.php';

class Agent extends User{
    
    public $percentuale;

    public function __construct($name, $email, $address, $percentuale = 10 )
    {
        $this->percentuale = $percentuale;
        parent::__construct($name, $email, $address);
    }

    public function getAgent(){
        return '<h2>Agent</h2>' . 
        'Nome: ' . $this->name . '<br>' . 
        'Email: ' . $this->email . '<br>' . 
        'Telefono: ' . $this->phone . '<br>'. 
        'Percentuale: ' . $this->percentuale . '%' .'<br>';
    }

}