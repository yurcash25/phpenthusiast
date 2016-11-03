<?php

abstract class User {
    
    protected $username;
    
    abstract public function stateYourRoll();
    
    public function setUsername($name)
    {
        $this->username = $name;
    }
    public function grtUsername()
    {
        return $this->username;
    }
            
}

class Admin extends User {
    
    public function stateYourRoll()
    {
        return strtolower(__CLASS__);
    }
}

class Viewer extends User{
    
    public function stateYourRoll()
    {
        return strtolower(__CLASS__);
     
    }
   
}
    


$admin1 = new Admin();
$admin1->setUserName("Balthazar");
echo $admin1->stateYourRoll();

?>
<br><br>
<br><br>
<a href="inheritance.php"><button ><- To previous excercise</button></a> 
<a href="interfaces.php"><button >To next excercise -></button></a> 


