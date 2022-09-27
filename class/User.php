<?php

require_once __DIR__ . '/trait/address.php';
class User {

    public $name;
    public $email;
    public $phone;
    public $fiscal_code;

    use Address;

    public function __construct($name, $email, $address, $fiscal_code = null ){
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->fiscal_code = $fiscal_code;
    }

    public function setPhone($phone){
        if(is_int($phone)){
            $this->phone = $phone;
        }else{
            throw new exception('Il telefono deve composto da numeri');
        }
    }

    public function getPhone(){
        return $this->phone;
    }

}