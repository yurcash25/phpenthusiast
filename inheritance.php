<?php

class User {

protected $username;
  
public function setUserName ($name){
  
  $this -> username = $name;
}
public function getUsername()
{
  return $this->username;
}

}
class Admin extends User {
  
  public function expressYourRoll()
  {
   return "Admin"; //Another option: return strtolower(__CLASS__);
  }
  public function sayHello(){
    
    return "Hello ". strtolower(__CLASS__)." ,".$this->getUsername();
  }  
}
$admin1 = new Admin();
$admin1->setUserName("Balthazar");
echo $admin1->sayHello();
//echo "Hello ".$admin1->expressYourRoll().", ".$admin1->getUsername();
?>
<br><br>
<br><br>
<a href="magic_methods_properties.php"><button ><- To previous excercise</button></a> 
<a href="abstract_classes_methods.php"><button >To next excercise -></button></a> 
