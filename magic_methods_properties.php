<?php

 class User {
     
     private $firstName;
     private $lastName;
     
     //constructor function to set single method
     public function __construct($firstName, $lastName) {
         $this->firstName=$firstName;
         $this->lastName = $lastName;
     }
     
     public function getFullName()
     {
         return $this->firstName." ".$this->lastName;
     }
 }

 $userOne= new User("John","Doe");
 
 echo $userOne->getFullName();
 
