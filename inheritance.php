<?php

class User {

protected $username;
  
public function setUserName ($name){
  
  $this -> username = $name;
}
public function getUsername()
{
  return $this->userName;
}

}
class Admin extends User {
  
  public function expressYourRoll()
  {
   return "Admin"; //Another option: return strtolower(__CLASS__);
  }
  public function sayHello(){
    
    return "Hello". strtolower(__CLASS__)." ,".$this->getUsername();
  }  
}
$admin1 = new Admin();
$admin1->setUserName("Balthazar");
echo $admin1->sayHello();
//echo "Hello ".$admin1->expressYourRoll().", ".$admin1->getUsername();
