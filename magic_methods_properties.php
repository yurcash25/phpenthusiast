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
 
?>
<br><br>
<br><br>
<a href="chaining_methods_properties.php"><button ><- To previous excercise</button></a> 
<a href="inheritance.php"><button >To next excercise -></button></a> 
