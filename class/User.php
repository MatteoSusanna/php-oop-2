<?php

class User {

    public $name;
    public $email;
    public $phone;
    public $fiscal_code;

    use Address;

    public function __construct($name, $email, $address, $phone = null, $fiscal_code = null ){
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->phone = $phone;
        $this->fiscal_code = $fiscal_code;
    }

}