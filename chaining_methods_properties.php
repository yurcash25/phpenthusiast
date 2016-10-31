<?php

class User {
    
    //class properties
    public $firstName;
    public $lastName;
    
    //a method that  says hello to the user $firstName
    //the user $firstName property can be approached with the $this keyword
    
    public function hello()
    {
        return "Hello, ".$this->firstName;
    }
    //the register method
    public function register()
    {
        echo $this->firstName." ".$this->lastName." registered.";
        return $this;
    }
    //the mail method
    public function mail()
    {
        echo ' emailed.';
    }
}

$user11 = new User();
$user11->firstName="Jane";
$user11->lastName="Roe";

$user11->register()->mail();

//echo $user11->firstName." ".$user11->lastName." ".$user11->register()." ".$user11->mail();

