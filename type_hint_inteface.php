
<?php

  interface User {
 
  public function setUsername($username);
  public function getUsername();
  public function setGender($gender);
  public function getGender();
 
 }
 class Commentator implements User {
  
  protected $username=' ';
  protected $gender='dont know';
  
  public function setUsername($username)
  {
   $this->username= (is_string($username))? $username : "N/A"; 
  }
  public function getUsername()
  {
    return $this->username;
  }
  public function setGender($gender)
  {
    $gendersArray = array('male','female','other');
    if(in_array($gender,$gendersArray))
    {
    $this->gender=$gender;
    }
  }
  public function getGender()
  {
    
    return $this->gender;
   
  }
 }
 function greeting(User $greeting)
{
  if ($greeting->getGender() === "male")
  {
  return "Mr.".$greeting->getUsername();
  } 
  else 
  {
  return "Mrs.".$greeting->getUsername(); 
  }
}
  
$userF=new Commentator();
$userF->setUsername("Jane");
$userF->setGender("female");
echo greeting($userF);

$userM=new Commentator();
$userM->setUsername("Bobby");
$userM->setGender("male");
echo greeting($userM);